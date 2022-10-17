<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\CarMake;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCarProfile extends Component
{
    public $carid;
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
    public function mount($carslug)
    {
        $this->carid = $carslug;
    }
    public function render()
    {
        $makes = CarMake::all();
        $car = Car::where('slug', $this->carid)->first();
        return view('livewire.edit-car-profile', compact('car', 'makes'));
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
            'engine_number' => 'required|digits_between:11,17|exists:cars',
            'date_of_registration' => 'required|before_or_equal:' . Carbon::today()->subDays(7),
            'no_of_previous_owners' => 'required',
            'logbook_id' => 'required|digits_between:11, 16|exists:cars',
            'logbook' => 'required|mimes:pdf|max:2048',
            'bidding_time_expiry' => 'required|after_or_equal:' . Carbon::now()->addDays(7),

        ]);



        $new =   Car::where('slug', $this->carid)->first();
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
        $new->no_passengers = $this->no_passengers;
        $new->loading_capacity = $this->loading_capacity;
        $new->engine_number = $this->engine_number;
        $new->date_of_registration = $this->date_of_registration;
        $new->no_of_previous_owners = $this->no_of_previous_owners;
        $new->logbook_id = $this->logbook_id;
        $new->bidding_time_expiry = $this->bidding_time_expiry;
        $new->reg_number = $this->registration_number;
        $new->car_description = $this->car_description;
        if ($this->car_photo == "") {
            Storage::delete('public/cars/' . $new->car_image);
            $fileNameWithExt = $this->car_photo->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $this->car_photo->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $this->car_photo->storeAs('cars', $filenameToStore, 'public');
            $new->car_image = $filenameToStore;
        }
        if ($this->logbook == "") {
            Storage::delete('public/logbooks/' . $new->logbook);
            $fileNameWithExt = $this->logbook->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $this->logbook->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $this->logbook->storeAs('logbooks', $filenameToStore, 'public');
            $new->logbook = $filenameToStore;
        }
        $new->save();

        return redirect()->route('user.verifycarprofile', $new->slug);
    }
}
