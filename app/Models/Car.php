<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function carrmakefetch(){
        return $this->belongsTo(CarMake::class, 'car_make_id');
    }
    public function carrmakemodelfetch(){
        return $this->belongsTo(CarMakeModele::class, 'car_make_model_id');
    }
    use HasFactory;
}
