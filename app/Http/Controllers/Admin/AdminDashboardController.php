<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;

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
            return view('admin.carprofileedited', compact('car', 'slug'));
        } else {
            return back();
        }
    }
}
