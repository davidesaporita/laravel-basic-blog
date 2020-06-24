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
}
