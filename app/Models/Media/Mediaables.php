<?php

namespace App\Models\Media;

use App\Abstracts\Model;

class Mediaables extends Model
{
    protected $table = 'mediaables';

    protected $fillable = [
        'media_id',
        'mediaable_id',
        'mediaable_type',
    ];

}
