<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'description',
        'details',
        'birthday',
        'diploma',
        'phone',
        'email',
        'location',
        'status',
        'hobbies',
        'github',
        'linkedin',
        'website'
    ];

    protected $dates = [
        'birthday'
    ];
}
