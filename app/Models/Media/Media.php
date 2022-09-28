<?php

namespace App\Models\Media;

use App\Abstracts\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
            'bangla_title',
            'english_title',
            'bangla_alt_text',
            'english_alt_text',
            'filename',
            'mimetypes',
            'extension',
            'size',
            'disk_location',
            'url',
    ];

}
