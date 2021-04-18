<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Job extends Model
{
    protected $fillable = [
        'name',
        'company',
        'descritpion',
        'start_date',
        'end_date',
        'resume_id'
    ];
    
    protected $dates = [
        'start_date',
        'end_date'
    ];
    

    public function technologies() {
        return $this->hasMany(Technology::class);
    }

    public function getStartDateMonthAttribute() {
        return ucfirst($this->start_date->translatedFormat('F Y'));
    }

    public function getEndDateMonthAttribute() {
        return ucfirst($this->end_date->translatedFormat('F Y'));
    }

    // public function getLastJobAttribute() {
    //     return $this->name->orderBy('start_date', 'DESC')->first();
    // }



    public function getTimePassedAttribute() {
        $fromYear = $this->start_date->year;
        $fromMonth = $this->start_date->month;

        if ($this->end_date == null) {
            $toYear = Carbon::now()->year;
            $toMonth = Carbon::now()->month;
        } else {
            $toYear = $this->end_date->year;
            $toMonth = $this->end_date->month;
        }

        $from = Carbon::parse($fromYear.'-'.$fromMonth);
        $to = Carbon::parse($toYear.'-'.$toMonth);
        $diff = $from->diffForHumans($to, true, false, 6);
        return $diff;
    }
}
