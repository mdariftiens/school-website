<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Backend\Abstracts\BackendModel;

class WidgetFields extends BackendModel
{
    protected $table = 'widget_fields';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'field_name',
        'field_value',
    ];

}
