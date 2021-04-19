<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'description',
        'picture_path',
        'nav_picture_path',
        'details',
        'birthday',
        'diploma',
        'phone',
        'email',
        'location',
        'status',
        'hobbies' 
    ];

    protected $dates = [
        'birthday'
    ];
}
