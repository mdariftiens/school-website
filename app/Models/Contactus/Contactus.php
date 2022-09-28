<?php

namespace App\Models\Contactus;

use App\Abstracts\Model;

class Contactus extends Model
{
    protected $table = 'contactus';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

}
