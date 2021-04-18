<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'description'
    ];

    public function technologies() {
        return $this->hasMany(Technology::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function studies() {
        return $this->hasMany(Study::class);
    }
}
