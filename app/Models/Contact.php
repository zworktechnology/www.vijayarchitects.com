<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [

        'unique_code',

        'name',
        'phone',
        'email',
        'subject',
        'message',

    ];
}
