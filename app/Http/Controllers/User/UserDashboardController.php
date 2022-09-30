<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBid;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $uploaded = Car::where('status', 'published')->get();
        $bids = CarBid::where('bid_user_id', auth()->user()->id)->get();
        $maxamount = CarBid::where('bid_user_id', auth()->user()->id)->max('bidding_price');
        $minamount = CarBid::where('bid_user_id', auth()->user()->id)->min('bidding_price');

        return view('user.dashboard', compact('uploaded', 'bids', 'maxamount', 'minamount'));
    }
    public function uploadcar(){
        return view('user.upload-car');
    }
    public function uploadedcarprofile($slug){
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            return view('user.carprofileedited', compact('car', 'slug'));
        } else {
            return back();
        }
    }
    public function publishcar($slug){
        $car = Car::where('slug', $slug)->first();
        if ($car) {
            $car->status="admin";
            $car->save();
            $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'pending')->get();
            Toastr::success('car details sent to admin for review', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.underreview');
        } else {
            Toastr::success('No car details found', 'Title', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function carsunderreview(){

            $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'admin')->get();
            return view('user.cars-under-review', compact('cars'));

    }
    public function mycars(){
        $cars = Car::where('car_owner_id', auth()->user()->id)->get();
        return view('user.my-cars', compact('cars'));
    }
    public function declinedcars(){
        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'declined')->get();
        return view('user.cars-declined', compact('cars'));
    }
    public function publishedcars(){
        $cars = Car::where('car_owner_id', auth()->user()->id)->where('status', 'published')->get();
        return view('user.cars-published', compact('cars'));
    }
}
