<?php

namespace App\Models\News;

use App\Abstracts\Model;

class News extends Model
{

    protected $table = 'news';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'featured_image_link',
        'bangla_detail',
        'english_detail',
        'published_date',
    ];
}
