<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBooking extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function room()
    {
        return $this->belongsTo(HotelRoom::class);
    }

    function coupon()
    {
        return $this->hasOne(Coupon::class);
    }
}
