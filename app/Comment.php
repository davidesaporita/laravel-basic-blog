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
}
