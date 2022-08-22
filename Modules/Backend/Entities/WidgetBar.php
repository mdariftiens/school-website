<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WidgetBar extends Model
{
    protected $table = 'widget_bar';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'bar_name',
        'field_value',
    ];

}
