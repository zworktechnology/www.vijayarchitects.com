<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogmaster extends Model
{
    use HasFactory;

    protected $fillable = [

        'unique_code',

        'master_name',
        'master_url',

        'status',

        'soft_delete',

    ];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'blog_master_id');
    }
}
