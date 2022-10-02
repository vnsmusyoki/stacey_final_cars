<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPayment extends Model
{
    use HasFactory;
    public function paymentcar(){
        return $this->belongsTo(Car::class, 'car_id');
    }
    public function paymentuser(){
        return $this->belongsTo(Car::class, 'bid_user_id');
    }
}
