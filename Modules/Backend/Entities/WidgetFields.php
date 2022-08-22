<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WidgetFields extends Model
{
    protected $table = 'widget_fields';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'field_name',
        'field_value',
    ];

}
