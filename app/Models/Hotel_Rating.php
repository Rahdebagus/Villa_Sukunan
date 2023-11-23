<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_Rating extends Model
{
    use HasFactory;
    protected $guarded = [];


    function User()
    {
        return $this->belongsTo(User::class);
    }
    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
