<?php

namespace App\Http\Livewire\Users;

use App\Models\Car;
use App\Models\CarMake;
use Carbon\Carbon;
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
    public $no_passengers;
    public $loading_capacity;
    public $engine_number;
    public $date_of_registration;
    public $no_of_previous_owners;
    public $logbook_id;
    public $logbook;
    public $bidding_time_expiry;
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
            'fuel_type' => 'required',
            'no_passengers' => 'required|numeric|min:3',
            'loading_capacity' => 'required|numeric|min:50',
            'engine_number'=> 'required|digits_between:11,17|unique:cars',
            'date_of_registration' => 'required|before_or_equal:'.Carbon::today()->subDays(7),
            'no_of_previous_owners' => 'required',
            'logbook_id' => 'required|digits_between:11, 16|unique:cars',
            'logbook'=>'required|mimes:pdf|max:2048',
            'bidding_time_expiry' => 'required|after_or_equal:'.Carbon::now()->addDays(7),

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
        $new->status = "pending";
        $new->no_passengers = $this->no_passengers;
        $new->loading_capacity = $this->loading_capacity;
        $new->engine_number = $this->engine_number;
        $new->date_of_registration = $this->date_of_registration;
        $new->no_of_previous_owners = $this->no_of_previous_owners;
        $new->logbook_id = $this->logbook_id;
        $new->bidding_time_expiry = $this->bidding_time_expiry;
        $new->reg_number = $this->registration_number;
        $new->car_description = $this->car_description;
        $fileNameWithExt = $this->car_photo->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->car_photo->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->car_photo->storeAs('cars', $filenameToStore, 'public');
        $new->car_image = $filenameToStore;
        $fileNameWithExt = $this->logbook->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->logbook->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->logbook->storeAs('logbooks', $filenameToStore, 'public');
        $new->logbook = $filenameToStore;
        $new->slug = $totalstrings;
        $new->save();

        return redirect()->route('user.verifycarprofile', $totalstrings);
    }
}
