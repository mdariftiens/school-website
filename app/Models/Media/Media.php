<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

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
