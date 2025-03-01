<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable =[
        'title', 'description', 'image', 'price', 'total_room', 'wifi'
    ];
}
