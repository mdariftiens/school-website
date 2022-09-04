<?php

namespace App\Models\FileUpload;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table = 'upload_file_category';

    protected $fillable = [
        'english_name',
        'bangla_name'
    ];
}
