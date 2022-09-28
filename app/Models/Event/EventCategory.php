<?php

namespace App\Models\Event;

use App\Abstracts\Model;

class EventCategory extends Model
{
    protected $table = 'event_categories';

    protected $fillable = [
        'english_name',
        'bangla_name'
    ];

    public function events()
    {
        return $this->hasMany(Event::class,'category_id', 'id');
    }
}
