<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class MediaRel extends Model
{
    protected $table = 'media_rel';

    protected $fillable = [
        'media_id',
        'rel_id',
        'class_type',
    ];

}
