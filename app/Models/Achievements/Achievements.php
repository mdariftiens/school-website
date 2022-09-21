<?php

namespace App\Models\Achievements;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    use HasFactory;

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
