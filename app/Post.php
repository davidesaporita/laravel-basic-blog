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
}
