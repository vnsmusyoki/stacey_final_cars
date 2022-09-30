<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBid extends Model
{
    protected $fillable=['car_id', 'bid_user_id', 'car_min_price', 'bidding_price', 'slug', 'bid_status'];
    use HasFactory;
}
