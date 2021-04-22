<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'picture_path',
        'legend',
        'realisation_id'
    ];

    public function realisation() {
        return $this->belongsTo(Realisation::class);
    }
}
