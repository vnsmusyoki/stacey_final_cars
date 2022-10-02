<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBid;
use App\Models\CarPayment;
use App\Models\CarPhoto;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

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
        $awardedcars = Car::where(['status' => 'awarded', 'car_owner_id' => auth()->user()->id])->get();
        return view('user.dashboard', compact('uploaded', 'bids', 'maxamount', 'minamount', 'awardedcars'));
    }
    public function uploadcar()
    {
        return view('user.upload-car');
    }
    public function uploadedcarprofile($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $highest = CarBid::where('car_id', $car->id)->max('bidding_price');
            return view('user.carprofileedited', compact('car', 'slug', 'highest'));
        } else {
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
    public function soldcars(){
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
        $cars = Car::where('car_owner_id','!=',auth()->user()->id)->where('status', 'published')->get();
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
    public function allbids()
    {
        $bids = CarBid::where('bid_user_id', auth()->user()->id)->get();
        return view('user.all-bids-placed', compact('bids'));
    }
    public function approvepayment(Request $request)
    {
        $this->validate($request,['payment_approve'=>'required']);
        $payment = CarPayment::where('slug', $request->payment_approve)->first();
        if ($payment) {
            $payment->payment_status = "approved";
            $payment->save();
            $car = Car::where('id', $payment->car_id)->first();
            $car->status = "sold";
            $car->save();
            Toastr::success('payment details approved and car marked as sold.', 'Success', ["positionClass" => "toast-top-center"]);
            return back();
            return view('user.place-bid', compact('car', 'slug', 'images', 'bids', 'checkbid'));
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
            $car->user_awarded_id=null;
            $car->save();

            $bid = CarBid::where('id', $payment->bid_id)->first();
            $bid->award_status=null;
            $bid->save();

            Toastr::success('payment details rejected and car has been published back for bidding for  next 72 hours', 'Success', ["positionClass" => "toast-top-center"]);
            return back();
            return view('user.place-bid', compact('car', 'slug', 'images', 'bids', 'checkbid'));
        } else {
            Toastr::success('payment  details Not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }


}
