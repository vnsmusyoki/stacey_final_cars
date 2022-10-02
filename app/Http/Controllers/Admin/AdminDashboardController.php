<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBid;
use App\Models\CarPhoto;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

      
        return view('admin.dashboard');
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
            $car->status = "published";
            $car->save();
            Toastr::success('Car has been approved and will be visible to the main site', 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.approvedcars');
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
}
