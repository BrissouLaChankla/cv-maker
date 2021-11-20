<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisationTechnology extends Model
{
    protected $fillable = [
        'realisation_id',
        'technology_id',
    ];

    protected $table = 'realisation_technology';
    
    public function realisation() {
        return $this->belongsTo(Realisation::class);
    }
    
    public function technology() {
        return $this->belongsTo(Technology::class);
    }

    use HasFactory;
}
