<?php

namespace App\Models\Achievements;

use App\Abstracts\Model;

class Achievements extends Model
{

    protected $table = 'achievements';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'featured_image_link',
        'bangla_detail',
        'english_detail',
        'published_date',
    ];
}
