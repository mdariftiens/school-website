<?php

namespace App\Models\FileUpload;

use App\Abstracts\Model;

class FileUploadCategory extends Model
{

    protected $table = 'upload_file_category';

    protected $fillable = [
        'english_name',
        'bangla_name'
    ];

    public function files()
    {
        return $this->hasMany(FileUpload::class,'category_id');
    }
}
