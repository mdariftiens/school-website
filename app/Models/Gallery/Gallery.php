<?php

namespace App\Models\Gallery;

use App\Traits\HasMedia;
use App\Abstracts\Model;

class Gallery extends Model
{
    use HasMedia;

    const PUBLISHED = 1;

    protected $table = 'gallery';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'english_description',
        'bangla_description',
        'gallery_type',
        'priority',
        'is_publish'
    ];
}
