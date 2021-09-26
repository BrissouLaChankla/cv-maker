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
        return $this->belongsToMany(Technology::class);
    }
    public function pictures() {
        return $this->hasMany(Picture::class);
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
