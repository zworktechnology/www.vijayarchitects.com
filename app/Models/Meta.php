<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [

        'unique_code',

        'page_id',

        'meta_title',
        'meta_description',
        'meta_keyword',

        'og_type',
        'og_url',
        'og_title',
        'og_description',
        'og_image',
        'og_alt',

        'meta_note',

        'soft_delete',

    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
