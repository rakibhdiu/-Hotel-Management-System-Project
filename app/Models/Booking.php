<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
        'name','email','room_id','arrival_date','departure_date'
    ];
}
