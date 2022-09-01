<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Mediaables extends Model
{
    protected $table = 'mediaables';

    protected $fillable = [
        'media_id',
        'mediaable_id',
        'mediaable_type',
    ];

}
