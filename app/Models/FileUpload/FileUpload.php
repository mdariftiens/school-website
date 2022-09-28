<?php

namespace App\Models\FileUpload;

use App\Traits\HasMedia;
use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FileUpload extends Model
{
    use HasMedia;

    const PUBLISHED = 1;

    protected $table = 'upload_files';

    protected $fillable = [
        'category_id',
        'bangla_title',
        'english_title',
        'is_publish'
    ];

    function category(): BelongsTo
    {
        return $this->belongsTo(FileUploadCategory::class);
    }
}
