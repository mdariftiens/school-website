<?php

namespace App\Models\Blog;

use App\Abstracts\Model;

class PostCategory extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'post_id',
        'category_id',
    ];
}
