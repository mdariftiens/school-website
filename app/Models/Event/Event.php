<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'category_id',
        'bangla_title',
        'english_title',
        'bangla_description',
        'english_description',
        'is_published',
        'bangla_venue',
        'english_venue',
        'from_datetime',
        'to_datetime'
    ];


}
