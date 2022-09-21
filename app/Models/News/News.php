<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

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
