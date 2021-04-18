<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;



class Study extends Model
{
    protected $fillable = [
        'name',
        'school',
        'description',
        'start_date',
        'end_date',
        'job_id',
        'resume_id',
    ];

    protected $dates = [
        'start_date',
        'end_date'
    ];
    
    public function resume() {
        return $this->hasOne(Resume::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }



}
