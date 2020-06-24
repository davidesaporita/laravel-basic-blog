<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillables field for mass insert
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body'
    ];

    // Relationships
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags() 
    {
        return $this->belongsToMany('App\Tag');
    }
}
