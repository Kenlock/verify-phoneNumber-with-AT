<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyWithAT extends Model
{
    protected $fillable = [
        'phoneNumber',
        'token',
        'isVerified'
    ];
}
