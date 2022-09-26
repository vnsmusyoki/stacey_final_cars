<?php

namespace App\Http\Livewire\Users;

use App\Models\Car;
use App\Models\CarMake;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadCar extends Component
{
    use WithFileUploads;
    public $car_make;
    public $car_engine;
    public $transmission;
    public $car_photo;
    public $car_description;
    public $car_year;
    public $min_price;
    public $registration_number;
    public $car_model;
public $car_name;
public $car_milleage;
public $car_color;
public $car_features;
public $fuel_type;
    public function render()
    {
        $makes = CarMake::all();
        return view('livewire.users.upload-car', compact('makes'));
    }
    public function uploadcar()
    {
        $this->validate([
            'car_make' => 'required',
            'car_model' => 'required',
            'transmission' => 'required',
            'car_year' => 'required|numeric|min:2010|max:2022',
            'car_engine' => 'required',
            'min_price' => 'required|numeric',
            'registration_number' => 'required',
            'car_description' => 'required|string|max:10000000',
            'car_photo' => 'required|image|mimes:img, jpeg,jpg,png|max:2048',
            'car_features' => 'required|string',
            'car_color' => 'required',
            'car_milleage' => 'required',
            'car_name' => 'required',
            'fuel_type' => 'required'

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


        $new = new Car;
        $new->car_make_id = $this->car_make;
        $new->car_make_model_id = $this->car_model;
        $new->car_owner_id = auth()->user()->id;
        $new->car_year = $this->car_year;
        $new->min_price = $this->min_price;
        $new->engine_cc = $this->car_engine;
        $new->milleage = $this->car_milleage;
        $new->car_color = $this->car_color;
        $new->transmission = $this->transmission;
        $new->fuel_type = $this->fuel_type;
        $new->features = $this->car_features;
        $new->car_name = $this->car_name;
        $new->reg_number = $this->registration_number;
        $new->car_description = $this->car_description;
        $fileNameWithExt = $this->car_photo->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->car_photo->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->car_photo->storeAs('cars', $filenameToStore, 'public');
        $new->car_image = $filenameToStore;
        $new->slug = $totalstrings;
        $new->save();

        return redirect()->route('user.verifycarprofile', $totalstrings);
    }


}
