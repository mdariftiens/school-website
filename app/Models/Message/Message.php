<?php

namespace App\Models\Message;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

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
