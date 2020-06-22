<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    // Specify table name
    protected $table = 'info_user';
    
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
