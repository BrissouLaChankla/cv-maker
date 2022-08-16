<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herotext extends Model
{
    protected $fillable = [
        'welcome',
        'first_phrase',
        'second_phrase'
    ];
    
    use HasFactory;
}
