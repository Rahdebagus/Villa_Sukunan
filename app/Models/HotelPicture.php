<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPicture extends Model
{
    use HasFactory;
    protected $guarded = [];


    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
