<?php

namespace App\Models\Slider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'english_description',
        'bangla_description',
        'priority',
        'is_published'
    ];
}
