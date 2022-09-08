<?php

namespace App\Models\Slider;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
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
