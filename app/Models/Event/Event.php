<?php

namespace App\Models\Event;

use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{

    const PUBLISHED = 1;

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

    function category(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

}
