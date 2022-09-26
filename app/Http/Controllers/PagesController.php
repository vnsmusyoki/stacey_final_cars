<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarPhoto;
use App\Models\User;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;

class PagesController extends Controller
{
    public function index()
    {
        $cars = Car::where('status', 'published')->get();
        return view('pages.homepage', compact('cars'));
    }
    public function cardetails($slug)
    {
        // Toastr::success('Working on the details', 'Title', ["positionClass" => "toast-top-center"]);
        // return back();

        $car = Car::where('slug', $slug)->first();

        if ($car) {
            $photos = CarPhoto::where('car_id', $car->id)->get();
            $othercars = Car::where('status', 'published')->get();
            return view('pages.car-details', compact('car', 'slug', 'photos', 'othercars'));
        } else {

            return back();
        }
    }
    public function createaccount(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required|string|min:3',
            'other_names' => 'required|string|min:3',
            'username' => 'required|string|min:4|unique:users',
            'phone_number' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
        ]);
        // $fullname = $request->input('first_name')." ".$request->input('other_names');
        $name = $request->first_name . ' ' . $request->other_names;
        $user = new User;
        $user->name = $name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;
        $user->save();

        $user->attachRole('user');
        // $user->attachPermission('create-order');
        // Toastr::success('Customer account has been created successfully, now login to manage and place new orders', 'Welcome', ["positionClass" => "toast-top-right"]);
        return redirect()->route('login')->with('success', 'Congratulations, Your accout is now set up proceed to login');
    }
    public function placemybid(Request $request)
    {
        $this->validate($request, [
            'car_name' => 'required',
            'bid_amount' => 'required|numeric',
            'user_email' => 'required|email',
        ]);

        // $new = /
    }
}
