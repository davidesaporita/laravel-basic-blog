<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Fillables field for mass insert
    protected $fillables = [
        'name',
        'slug'
    ];

    // Relationships
    public function posts() 
    {
        return $this->belongsToMany('App\Post');
    }
}
