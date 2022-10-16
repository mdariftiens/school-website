<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;

class Category extends Model
{
    use HasMedia;

    protected $table = 'categories';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'status',
    ];
}
