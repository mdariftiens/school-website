<?php

namespace App\Models\Blog;

use App\Abstracts\Model;

class PostCategory extends Model
{
    protected $table = 'post_category';

    protected $fillable = [
        'post_id',
        'category_id',
    ];
}
