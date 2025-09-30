<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [

        'unique_code',

        'page_name',
        'page_note',
        'page_url',

        'status',

        'soft_delete',

    ];

    public function meta()
    {
        return $this->hasMany(Meta::class, 'page_id');
    }

}
