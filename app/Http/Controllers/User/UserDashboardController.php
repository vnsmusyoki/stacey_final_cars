<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('user.dashboard');
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
}
