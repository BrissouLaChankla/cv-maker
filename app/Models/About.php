<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'nav_picture_path',
        'picture_path',
        'description',
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
