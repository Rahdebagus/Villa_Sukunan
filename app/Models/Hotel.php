<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guardate = [];

    function hotelRatings()
    {
        return $this->hasMany(HotelRating::class);
    }

    function hotelPictures()
    {
        return $this->hasMany(HotelPicture::class);
    }
    function hotelRooms()
    {
        return $this->hasMany(HotelRoom::class);
    }
}
