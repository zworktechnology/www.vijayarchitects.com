<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagmanager extends Model
{
    use HasFactory;

    protected $fillable = [

        'unique_code',

        'script',
        'no_script',
        'site_verify',

        'soft_delete',

    ];
}
