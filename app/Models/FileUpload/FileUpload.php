<?php

namespace App\Models\FileUpload;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table = 'upload_files';

    protected $fillable = [
        'category_id',
        'bangla_title',
        'english_title',
        'is_publish'
    ];
}