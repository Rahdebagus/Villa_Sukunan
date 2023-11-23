<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Booking extends Model
{
    use HasFactory;


    function User()
    {
        return $this->belongsTo(User::class);
    }
    function Room()
    {
        return $this->belongsTo(Hotel_Room::class);
    }
    function cupon()
    {
        return $this->hasOne(Cupon::class);
    }
}
