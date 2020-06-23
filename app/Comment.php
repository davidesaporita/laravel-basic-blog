<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Fillables field for mass insert
    protected $fillable = [
        'user_id', 
        'post_id',
        'title',
        'body'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
