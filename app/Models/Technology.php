<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    protected $fillable = [
        'name',
        'logo_icon',
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
        return $this->belongsToMany(Realisation::class)->withPivot('technology_id', 'realisation_id');
    }

    // Check si la techo en question est utilisée pour le projet 
    // à améliorer
    public function isUsed($realisationid) {
        if(RealisationTechnology::where(["realisation_id" => $realisationid, "technology_id" => $this->id])->exists()) {
            return true;
        } else {
            return false;
        }
        
    }
}
