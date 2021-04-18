<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    protected $fillable = [
        'name',
        'logo_path',
        'description',
        'color',
        'type',
        'mastery',
        'resume_id',
    ];
    

    public function resume() {
        return $this->belongsTo(Resume::class);
    }

    public function realisations() {
        return $this->belongsToMany(Realisation::class);
    }
}
