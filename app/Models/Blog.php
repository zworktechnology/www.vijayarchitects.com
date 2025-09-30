<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [

        'unique_code',

        'blog_master_id',

        'title',
        'short_note',
        'blog_content',
        'blog_image',
        'blog_img_alt',

        'slug_url',

        'meta_title',
        'meta_description',
        'meta_keyword',

        'og_type',
        'og_url',
        'og_title',
        'og_description',

        'writer_name',
        'writer_email',
        'writer_website',

        'listing',
        'pinit',

        'soft_delete',

    ];

    public function blogmaster()
    {
        return $this->belongsTo(Blogmaster::class, 'blog_master_id');
    }
}
