<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBid;
use App\Models\CarMake;
use App\Models\CarMakeModele;
use App\Models\CarPayment;
use App\Models\CarPhoto;
use App\Models\User;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $cars = Car::where('status', 'admin')->get();
        $payments = CarPayment::where('payment_status', 'approved')->get();
        $totalpayments = CarPayment::where('payment_status', 'approved')->sum('admin_amount');
        $users = User::whereRoleIs('user')->get();
        $bids = CarBid::all();
        $newpayments = CarPayment::where('payment_status', 'pending')->get();
        return view('admin.dashboard', compact('cars', 'payments', 'users', 'bids', 'totalpayments', 'newpayments'));
    }
    public function uploadedcars()
    {
        $cars = Car::where('status', 'admin')->get();
        return view('admin.cars-pending-approval', compact('cars'));
    }
    public function carapproved($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            return view('admin.car-approval-declined', compact('car'));
          } else {

            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function carrejected($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $car->status = "declined";
            $car->save();
            Toastr::success('Car has been declined and will not be visible at the main page', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->to('admin/all-rejected-cars');
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function savejudgement(Request $request, $slug)
    {
        $this->validate($request, [
            'car_judgement' => 'required',
            'brief_description' => 'required|string',
        ]);
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $car->status = "published";
            $car->car_judgement = $request->car_judgement;
            $car->judgement_description = $request->brief_description;
            $car->save();
            Toastr::success('Data has been saved successfully', 'Title', ["positionClass" => "toast-bottom-right"]);
            return redirect()->to('admin/all-uploaded-cars');
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function approvedcars()
    {
        $cars = Car::where('status', 'published')->get();
        return view('admin.cars-published', compact('cars'));
    }
    public function declinedcars()
    {
        $cars = Car::where('status', 'declined')->get();
        return view('admin.cars-declined', compact('cars'));
    }
    public function carprofiledetails($slug)
    {
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $highest = CarBid::where('car_id', $car->id)->max('bidding_price');
            $attachments = CarPhoto::where('car_id', $car->id)->get();
            return view('admin.carprofileedited', compact('car', 'slug', 'attachments', 'highest'));
        } else {
            return back();
        }
    }
    public function viewcardetails($slug){
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $highest = CarBid::where('car_id', $car->id)->max('bidding_price');
            $attachments = CarPhoto::where('car_id', $car->id)->get();
            return view('admin.carprofile-details', compact('car', 'slug', 'attachments', 'highest'));
        } else {
            return back();
        }
    }
    public function carsuploadedtoday()
    {
        $cars = Car::wheredate('created_at', Carbon::today())->where('status', 'admin')->get();
        return view('admin.cars-uploaded-today', compact('cars'));
    }
    public function allusers()
    {
        $users = User::whereRoleIs('user')->get();
        return view('admin.all-users', compact('users'));
    }
    public function carmakes()
    {
        $makes = CarMake::all();

        return view('admin.all-car-make', compact('makes'));
    }
    public function uploadcarmake(Request $request)
    {
        $this->validate($request, ['car_make' => 'required|string']);
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
        $new = new CarMake;
        $new->car_make_name = $request->car_make;
        $new->slug = $totalstrings;
        $new->save();
        Toastr::success('car make has been uploaded to the system', 'Title', ["positionClass" => "toast-top-center"]);
        return back();
    }
    public function editcarmake($slug)
    {
        $makes = CarMake::where('slug', $slug)->first();
        if ($makes) {
            return view('admin.edit-car-make', compact('makes'));
        } else {
            Toastr::success('car make not found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function updatecarmake(Request $request, $slug)
    {
        $this->validate($request, ['car_make' => 'required|string']);

        $new = CarMake::where('slug', $slug)->first();
        if ($new) {
            $new->car_make_name = $request->car_make;
            $new->save();
            Toastr::success('car make has been updated successfully', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->to('admin/all-car-makes');
        } else {
            Toastr::success('failed to make the updates', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->to('admin/all-car-makes');
        }
    }
    public function deletecarmake($slug)
    {
        $makes = CarMake::where('slug', $slug)->first();
        if ($makes) {
            $makes->delete();
            Toastr::success('car make has been deleted successfully', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->to('admin/all-car-makes');
        } else {
            Toastr::success('car make not found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function carmakemodels()
    {
        $makes = CarMake::all();
        $models = CarMakeModele::all();
        return view('admin.all-car-make-models', compact('makes', 'models'));
    }
    public function uploadcarmakemodel(Request $request)
    {
        $this->validate($request, [
            'car_make' => 'required',
            'car_make_model' => 'required|string',
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
        $new = new CarMakeModele;
        $new->car_make_id = $request->car_make;
        $new->car_make_model_name = $request->car_make_model;
        $new->slug = $totalstrings;
        $new->save();
        Toastr::success('car make model has been uploaded to the system', 'Title', ["positionClass" => "toast-top-center"]);
        return back();
    }
    public function editcarmakemodel($slug)
    {
        $model = CarMakeModele::where('slug', $slug)->first();
        $makes = CarMake::all();
        if ($model) {
            return view('admin.edit-car-make_model', compact('model', 'makes'));
        } else {
            Toastr::success('car make not found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function updatecarmakemodel(Request $request, $slug)
    {
        $this->validate($request, [
            'car_make' => 'required',
            'car_make_model' => 'required|string',
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
        $new = CarMakeModele::where('slug', $slug)->first();
        $new->car_make_id = $request->car_make;
        $new->car_make_model_name = $request->car_make_model;
        $new->slug = $totalstrings;
        $new->save();
        Toastr::success('car make model has been uploaded to the system', 'Title', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.carmodels');
    }
    public function deletecarmakemodel($slug)
    {
        $makes = CarMakeModele::where('slug', $slug)->first();
        if ($makes) {
            $makes->delete();
            Toastr::success('car make model has been deleted successfully', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.carmodels');
        } else {
            Toastr::success('car make model not found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function accountsettings(){
        return view('admin.account-settings');
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
        } else {
            Toastr::success('payment  details Not found.', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
}
