<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Realisation extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'logo_path',
        'background_path',
        'background_path_small',
        'category',
        'link',
        'date'
    ];

    protected $dates = [
        'date'
    ];

    public function technologies() {
        return $this->belongsToMany(Technology::class)->withPivot('realisation_id', 'technology_id');
    }
    public function pictures() {
        return $this->hasMany(Picture::class);
    }

    //Check si la techo en question est utilisée pour le projet 
    public function technologiesUsed($technology_id) {
        return $this->technologies()->where('technology_id','=', $technology_id);  
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
