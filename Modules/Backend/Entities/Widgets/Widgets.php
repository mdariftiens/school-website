<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Backend\Abstracts\BackendModel;

class Widgets extends BackendModel
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
    ];

}
