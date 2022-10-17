<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\PaymentNotifyAdmin;
use App\Mail\PaymentNotifyCarOwnern;
use App\Mail\PaymentNotifyCustomer;
use App\Models\Car;
use App\Models\CarBid;
use App\Models\CarMake;
use App\Models\CarPayment;
use App\Models\CarPhoto;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $uploaded = Car::where(['car_owner_id' => auth()->user()->id])->get();
        $bids = CarBid::where('bid_user_id', auth()->user()->id)->get();
        $maxamount = CarBid::where('bid_user_id', auth()->user()->id)->max('bidding_price');
        $minamount = CarBid::where('bid_user_id', auth()->user()->id)->min('bidding_price');
        $awardedcars = Car::query()
        ->where(['user_awarded_id' => auth()->user()->id])
        // ->orWhere(['status' => 'sold', 'user_awarded_id' => auth()->user()->id])
        ->get();
        $checkpayments = Car::query()
        ->where(['car_owner_id' => auth()->user()->id])
        ->whereNotNull('user_awarded_id')
        ->get();

        return view('user.dashboard', compact('uploaded', 'bids', 'maxamount', 'minamount', 'awardedcars', 'checkpayments'));
    }
    public function uploadcar()
    {
        return view('user.upload-car');
    }
    public function uploadedcarprofile($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $highest = CarBid::where('car_id', $car->id)->orderBy('bidding_price', 'DESC')->first();
            return view('user.carprofileedited', compact('car', 'slug', 'highest'));
        } else {
            return back();
        }
    }
    public function editcar($slug){
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $makes = CarMake::all();
            return view('user.edit-car', compact('car', 'slug', 'makes'));
        } else {
            return back();
        }
    }
    public function updatecar(Request $request, $slug){
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $this->validate($request, [
                'car_make' => 'required',
                'car_model' => 'required',
                'transmission' => 'required',
                'car_year' => 'required|numeric|min:2010|max:2022',
                'car_engine' => 'required',
                'min_price' => 'required|numeric',
                'registration_number' => 'required',
                'car_description' => 'required|string|max:10000000',
                'car_photo' => 'nullable|image|mimes:img, jpeg,jpg,png|max:2048',
                'car_features' => 'required|string',
                'car_color' => 'required',
                'car_milleage' => 'required',
                'car_name' => 'required',
                'fuel_type' => 'required',
                'no_passengers' => 'required|numeric|min:3',
                'loading_capacity' => 'required|numeric|min:50',
                'engine_number' => 'required|digits_between:11,17|exists:cars',
                'date_of_registration' => 'required|before_or_equal:' . Carbon::today()->subDays(7),
                'no_of_previous_owners' => 'required',
                'logbook_id' => 'required|digits_between:11, 16|exists:cars',
                'logbook' => 'nullable|mimes:pdf|max:2048',
                'bidding_time_expiry' => 'required|after_or_equal:' . Carbon::now()->addDays(7),

            ]);
            $new =   Car::where('slug', $slug)->first();
            $new->car_make_id = $request->car_make;
            $new->car_make_model_id = $request->car_model;
            $new->car_owner_id = auth()->user()->id;
            $new->car_year = $request->car_year;
            $new->min_price = $request->min_price;
            $new->engine_cc = $request->car_engine;
            $new->milleage = $request->car_milleage;
            $new->car_color = $request->car_color;
            $new->transmission = $request->transmission;
            $new->fuel_type = $request->fuel_type;
            $new->features = $request->car_features;
            $new->car_name = $request->car_name;
            $new->no_passengers = $request->no_passengers;
            $new->loading_capacity = $request->loading_capacity;
            $new->engine_number = $request->engine_number;
            $new->date_of_registration = $request->date_of_registration;
            $new->no_of_previous_owners = $request->no_of_previous_owners;
            $new->logbook_id = $request->logbook_id;
            $new->bidding_time_expiry = $request->bidding_time_expiry;
            $new->reg_number = $request->registration_number;
            $new->car_description = $request->car_description;
            if ($request->hasFile('car_photo')) {
                Storage::delete('public/cars/' . $new->car_image);
                $fileNameWithExt = $request->car_photo->getClientOriginalName();
                $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $Extension = $request->car_photo->getClientOriginalExtension();
                $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
                $path = $request->car_photo->storeAs('cars', $filenameToStore, 'public');
                $new->car_image = $filenameToStore;
            }
            if ($request->hasFile('logbook')) {
                Storage::delete('public/logbooks/' . $new->logbook);
                $fileNameWithExt = $request->logbook->getClientOriginalName();
                $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $Extension = $request->logbook->getClientOriginalExtension();
                $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
                $path = $request->logbook->storeAs('logbooks', $filenameToStore, 'public');
                $new->logbook = $filenameToStore;
            }
            $new->save();

            Toastr::success('Car details updated successfuly', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.verifycarprofile', $new->slug);
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function extendtimedeadline(Request $request, $car){
        $car = Car::where('slug', $car)->first();
        if ($car) {
            $this->validate($request, [
                'new_timeline'=>'required|after_or_equal:date'.Carbon::now()
            ]);
            $car->bidding_time_expiry = $request->new_timeline;
            $car->save();
            Toastr::success('Car bidding time expiry has been updated', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function placebiddetails($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $bids = CarBid::where('car_id', $car->id)->count();
            $images = CarPhoto::where('car_id', $car->id)->get();
            $checkbid = CarBid::where('bid_user_id', auth()->user()->id)->where('car_id', $car->id)->get();
            return view('user.place-bid', compact('car', 'slug', 'images', 'bids', 'checkbid'));
        } else {
            return back();
        }
    }
    public function publishcar($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $car->status = "admin";
            $car->save();
            $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'pending')->get();
            Toastr::success('car details sent to admin for review', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.underreview');
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function carsunderreview()
    {

        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'admin')->get();
        return view('user.cars-under-review', compact('cars'));
    }
    public function mycars()
    {
        $cars = Car::where('car_owner_id', auth()->user()->id)->get();
        return view('user.my-cars', compact('cars'));
    }
    public function declinedcars()
    {
        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'declined')->get();
        return view('user.cars-declined', compact('cars'));
    }
    public function soldcars()
    {
        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'sold')->get();
        return view('user.cars-sold', compact('cars'));
    }

    public function publishedcars()
    {
        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'published')->get();
        return view('user.cars-published', compact('cars'));
    }
    public function placebid()
    {
        $cars = Car::where('car_owner_id', '!=', auth()->user()->id)->where('status', 'published')->get();
        return view('user.select-bid-car', compact('cars'));
    }
    public function submitbids(Request $request)
    {
        $this->validate($request, [
            'car_id' => 'required',
            'bid_amount' => 'required|numeric',
        ]);

        $timenows = time();
        $checknums = "1234567898746351937463790";
        $checkstrings = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte191827273jkskalqKNJAHSGETWIOWKSNXJNEUDNEKDKSMKIDNUENDNXKSKEJNEJHCBRFGEWVJHBKWJEBFRNKWJENFECKWLERKJFNRKEHBJWEiwjWSIWMSWISWQOQOAWSAMJENEJEEDEWSSRFRFTHUJOKMNZBXVCX";
        $checktimelengths = 6;
        $checksnumlengths = 6;
        $checkstringlength = 90;
        $randnums = substr(str_shuffle($timenows), 0, $checktimelengths);
        $randstrings = substr(str_shuffle($checknums), 0, $checksnumlengths);
        $randcheckstrings = substr(str_shuffle($checkstrings), 0, $checkstringlength);
        $totalstrings = str_shuffle($randcheckstrings . "" . $randnums . "" . $randstrings);
        $car = Car::where('id', $request->car_id)->first();
        if ($car) {
            $customer = User::where('email', auth()->user()->email)->first();
            if ($customer) {
                $checkbid = CarBid::where(['bid_user_id' => $customer->id, 'car_id' => $car->id])->first();
                if ($checkbid) {
                    Toastr::error('You have already placed a bid for this car.', 'Title', ["positionClass" => "toast-top-center"]);
                    return redirect()->back();
                } else {
                    $new = new  CarBid;
                    $new->car_id  = $car->id;
                    $new->bid_user_id = $customer->id;
                    $new->car_min_price = $car->min_price;
                    $new->bidding_price = $request->bid_amount;
                    $new->slug = $totalstrings;
                    $new->bid_status = "placed";
                    $new->save();
                    Toastr::success('Congratulations, your bid has been placed.', 'Title', ["positionClass" => "toast-top-center"]);
                    return redirect()->route('user.allbids');
                }
            } else {

                return redirect()->back();
            }
        } else {
            Toastr::success('car detailsNot found.', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
    }
    public function editbid($car, $bid)
    {
        $car = Car::where('slug', $car)->first();
        $bid = CarBid::where('slug', $bid)->first();

        if ($car && $bid) {
            $images = CarPhoto::where('car_id', $car->id)->get();
            return view('user.edit-placed-bid', compact('car', 'bid', 'images'));
        } else {
            Toastr::success('car detailsNot found.', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
    }
    public function updatebid(Request $request, $bid)
    {

        $this->validate($request, ['bid_id' => 'required', 'bid_amount' => 'required']);
        $payment = CarBid::where('id', $request->bid_id)->first();
        if ($payment) {
            if ($payment->award_status == 1) {
                Toastr::error('This bid can not be edited because you have already been allocated and you will be required to pay the current price and submit the payment details for approval', 'Alert', ["positionClass" => "toast-top-center"]);
                return redirect('user/all-bids');
            } else {
                $payment->bidding_price = $request->bid_amount;
                $payment->save();
                Toastr::success('You have edited your bid', 'Success', ["positionClass" => "toast-top-center"]);
                return redirect('user/all-bids');
            }
        } else {
            Toastr::success('payment  details Not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
    }
    public function allbids()
    {
        $bids = CarBid::where('bid_user_id', auth()->user()->id)->get();
        return view('user.all-bids-placed', compact('bids'));
    }
    public function winningbids()
    {
        $bids = CarBid::where('bid_user_id', auth()->user()->id)->where('award_status', 1)->get();
        return view('user.all-winning-bids', compact('bids'));
    }
    public function approvepayment(Request $request)
    {
        $this->validate($request, ['payment_approve' => 'required']);
        $payment = CarPayment::where('slug', $request->payment_approve)->first();
        if ($payment) {
            $payment->payment_status = "approved";
            $payment->save();
            $car = Car::where('id', $payment->car_id)->first();
            $car->status = "sold";
            $car->save();
            Toastr::success('payment details approved and car marked as sold.', 'Success', ["positionClass" => "toast-top-center"]);
            return back();
            // return view('user.place-bid', compact('car', 'slug', 'images', 'bids', 'checkbid'));
        } else {
            Toastr::success('payment  details Not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function rejectpayment($slug)
    {
        $payment = CarPayment::where('slug', $slug)->first();
        if ($payment) {
            $payment->payment_status = "rejected";
            $payment->save();

            $car = Car::where('id', $payment->car_id)->first();
            $car->status = "published";
            $car->bidding_time_expiry = Carbon::now()->addHours(72);
            $car->user_awarded_id = null;
            $car->save();

            $bid = CarBid::where('id', $payment->bid_id)->first();
            $bid->award_status = null;
            $bid->save();

            Toastr::success('payment details rejected and car has been published back for bidding for  next 72 hours', 'Success', ["positionClass" => "toast-top-center"]);
            return back();
            return view('user.place-bid', compact('car', 'slug', 'images', 'bids', 'checkbid'));
        } else {
            Toastr::success('payment  details Not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function removebid($bid)
    {
        $bid = CarBid::where('bid_user_id', auth()->user()->id)->where('slug', $bid)->first();
        if ($bid) {
            $check  = CarPayment::where('bid_id', $bid->id)->first();
            if ($check) {
                $carcheck = Car::findorFail($check->car_id);
                $carcheck->status = "published";
                $carcheck->user_awarded_id = null;
                $carcheck->bidding_time_expiry = Carbon::now()->addHours(72);
                $carcheck->save();
                $bid->delete();
                Toastr::success('Seems like you had already been allocated this car. it will be visible back to the main page for more bids', 'Title', ["positionClass" => "toast-top-center"]);
                return back();
            } else {
                Toastr::success('You have deleted your bid', 'Title', ["positionClass" => "toast-top-center"]);
                return back();
            }
        } else {
            Toastr::success('Bid details not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function submitpayment($slug)
    {
        $payment = CarPayment::where('bid_user_id', auth()->user()->id)->where('slug', $slug)->first();
        if ($payment) {
            $car  = Car::where('id', $payment->car_id)->first();
            $highest = CarBid::where('car_id', $car->id)->orderBy('bidding_price', 'DESC')->first();

            $images = CarPhoto::where('car_id', $car->id)->get();

            return view('user.submit-payment', compact('payment', 'car', 'images', 'highest'));
        } else {
            Toastr::success('Unable to fetch the details', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function uploadpayment(Request $request)
    {
        $this->validate($request, ['transaction_code' => 'required|string|min:10|max:10|unique:car_payments', 'payment_id' => 'required']);
        $payment = CarPayment::where('id', $request->payment_id)->first();
        if ($payment) {
            $payment->transaction_code = $request->transaction_code;
            $payment->save();
            $maxbid = CarBid::where('id', $payment->bid_id)->first();
            $car = Car::where('id', $payment->car_id)->first();
            $messageone = "Congratulations, Your payment for the car " . $car->car_name . " registration_number" . $car->reg_number . " has been received KES:" . $maxbid->bidding_price . " We will verify as soon as possible and we will email you more details about where to pick your car.";
            $receiverone = $maxbid->carbidcustomer->email;
            $senderone = "smartmarcars@gmail.com";

            $messagetwo = "This is to notify you that we have received payment details for the car  " . $car->car_name . " registration_number" . $car->reg_number . "   KES:" . $maxbid->bidding_price . "Log In to your dashboard for approval/rejection";
            $receivertwo = $car->carowner->email;
            $sendertwo = "smartmarcars@gmail.com";

            $messagethree = "Please note that " . $car->car_name . " registration_number" . $car->reg_number . " has been paid by " . $maxbid->carbidcustomer->name . " Phone Number " . $maxbid->carbidcustomer->phone_number . " at KES:" . $maxbid->bidding_price . " Log In for approval.";
            $receiverthree = "endlesscript@gmail.com";
            $senderthree = "smartmarcars@gmail.com";

            Mail::to($receiverone)->send(new PaymentNotifyCustomer($messageone, $receiverone, $senderone));
            Mail::to($receivertwo)->send(new PaymentNotifyCarOwnern($messagetwo, $receivertwo, $sendertwo));
            Mail::to($receiverthree)->send(new PaymentNotifyAdmin($messagethree, $receiverthree, $senderthree));

            Toastr::success('Payment has been received. Wait for approval', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user');
        } else {
            Toastr::success('Unable to fetch the details', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function accountsettings(){
        return view('user.account-settings');
    }


    public function saveaccountpassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed|string|min:6|max:20',
            'password_confirmation' => 'required',
        ]);
        $currentpassword = auth()->user()->password;
        if (Hash::check($request->current_password, $currentpassword)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Toastr::success('Password changed successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            Toastr::error('Current password is incorrect', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function saveaccountemail(Request $request)
    {
        $this->validate($request, [
            'current_email' => 'required',
            'email' => 'required|email|unique:users',
            'confirm_email' => 'required|same:email',
        ]);
        $currentemail = auth()->user()->email;
        if ($request->current_email == $currentemail) {
            $user = User::find(auth()->user()->id);
            $user->email = $request->email;
            $user->save();
            Toastr::success('Email changed successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            Toastr::error('Current email is incorrect', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }
}
