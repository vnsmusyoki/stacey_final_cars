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
    public function carowner(){
        return $this->belongsTo(User::class, 'car_owner_id', 'id');
    }
    public function caruserawarded(){
        return $this->belongsTo(User::class, 'user_awarded_id', 'id');
    }
    protected $dates=['bidding_time_expiry'];
    use HasFactory;
}
