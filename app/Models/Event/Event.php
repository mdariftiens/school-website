<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = ['category_id','bangla_title','english_title','english_slug','bangla_slug','bangla_description','english_description','is_published','bangla_venue','english_venue','from_datetime','to_datetime'];
}
