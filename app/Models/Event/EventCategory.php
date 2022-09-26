<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;
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
