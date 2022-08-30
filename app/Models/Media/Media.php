<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
            'filename',
            'mimetypes',
            'extension',
            'size',
            'disk_location',
            'url',
    ];

}
