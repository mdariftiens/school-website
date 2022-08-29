<?php

namespace App\Models\Option;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Option extends Model
{

    const AUTOLOAD = TRUE;

    protected $fillable = [
        'name',
        'value',
        'value',
    ];

    protected $casts = [
        'is_autoload' => 'boolean',
    ];
}
