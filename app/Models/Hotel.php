<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guardate = [];

    function hotel_rating()
    {
        return $this->hasMany(Hotel_Rating::class);
    }

    function hotel_picture()
    {
        return $this->hasMany(Hotel_picture::class);
    }
    function hotel_room()
    {
        return $this->hasMany(hotel_room::class);
    }
}
