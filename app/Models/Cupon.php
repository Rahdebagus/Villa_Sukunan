<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;


    function user_booking()
    {
        return $this->belongsTo(User_Booking::class);
    }
}
