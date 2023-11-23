<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    function userBookings()
    {
        return $this->hasMany(User_Booking::class);
    }
}
