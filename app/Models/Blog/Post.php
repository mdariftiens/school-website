<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;

class Post extends Model
{
    use HasMedia;

    protected $table = 'posts';

    protected $fillable = [
        'featured_image_link',
        'bangla_title',
        'english_title',
        'slug',
        'bangla_description',
        'english_description',
        'status',
    ];
}
