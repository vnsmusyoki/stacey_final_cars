<?php

namespace App\Http\Livewire\Users;

use App\Models\Car;
use App\Models\CarPhoto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class UploadCarPhotos extends Component
{

    public $file_attachment;
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $carprofileslug;
    public function render()
    {
        $car = Car::where('slug', $this->carprofileslug)->first();
        $attachments = CarPhoto::where('car_id', $car->id)->get();
        return view('livewire.users.upload-car-photos', compact('attachments', 'car'));
    }
    public function mount($carslug)
    {
        $this->carprofileslug = $carslug;
    }
    public function submitattachment()
    {
        $this->validate([
            'file_attachment' => 'required|mimes:jpeg,jpg,png|max:100048',
        ]);
        $car = Car::where('slug', $this->carprofileslug)->first();
        if ($car == null) {

            session()->flash('errormessage', 'Car details can not be retrieved .');
        } else {
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

            $attachment  = new CarPhoto;
            $attachment->car_id = $car->id;
            $fileNameWithExt = $this->file_attachment->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $this->file_attachment->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $this->file_attachment->storeAs('cars', $filenameToStore, 'public');
            $attachment->image_name = $filenameToStore;
            // $attachment->attachment_type = $Extension;
            $attachment->slug = $totalstrings;
            $attachment->car_owner_id = auth()->user()->id;
            $attachment->file_size = number_format($this->file_attachment->getSize() / 1048576, 2);
            $attachment->save();
            $this->file_attachment = null;
            session()->flash('message', 'File Attachment successfully uploaded.');
        }
    }
    public function removepic($id)
    {
        $image = CarPhoto::findOrFail($id);
        $image->delete();
        session()->flash('message', 'File Attachment successfully deleted.');
    }
}
