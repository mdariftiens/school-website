<?php

namespace App\Models\Option;

use App\Abstracts\Model;

class Option extends Model
{
    const AUTOLOAD = 1;
    protected $table = 'options';

    protected $fillable = [
        'name',
        'value',
    ];

}
