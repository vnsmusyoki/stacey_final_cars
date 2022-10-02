<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMakeModele extends Model
{
    use HasFactory;

    public function carmakemodel(){
        return $this->belongsTo(CarMake::class, 'car_make_id');
    }
}
