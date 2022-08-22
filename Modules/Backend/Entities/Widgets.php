<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Widgets extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
    ];

}
