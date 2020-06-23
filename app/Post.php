<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillables field for mass insert
    protected $fillables = [
        'user_id',
        'title',
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
}
