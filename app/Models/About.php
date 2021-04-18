<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'description',
        'details',
        'birthday',
        'diploma',
        'phone',
        'email',
        'location',
        'status',
        'hobbies',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'git'
    ];

    protected $dates = [
        'birthday'
    ];
}
