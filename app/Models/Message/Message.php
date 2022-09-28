<?php

namespace App\Models\Message;

use App\Abstracts\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'bangla_title',
        'english_title',
        'english_designation',
        'bangla_designation',
        'english_name',
        'bangla_name',
        'english_message',
        'bangla_message',
        'image',
        'priority',
    ];
}
