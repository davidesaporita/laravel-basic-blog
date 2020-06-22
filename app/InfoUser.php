<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    // Fillables field for mass insert
    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'image'
    ];

    // Remove operations with timestamps
    public $timestamps = false;
}
