<?php

namespace App\Models\Notice;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    use HasMedia;
    protected $table = 'notice';

    protected $fillable = [
        'category_id',
        'bangla_title',
        'english_title',
        'bangla_description',
        'english_description',
        'is_published',
        'published_datetime',
        'featured_image_link',
        'is_ticker',
        'ticker_link',
        'is_featured'
    ];
}
