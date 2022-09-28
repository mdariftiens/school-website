<?php

namespace App\Models\Slider;

use App\Traits\HasMedia;
use App\Abstracts\Model;

class Slider extends Model
{
    use HasMedia;

    protected $table = 'slider';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'english_description',
        'bangla_description',
        'priority',
        'is_published',
    ];
}
