<?php

namespace Modules\Admin\Entities\Widgets;

use App\Abstracts\Model;

class WidgetFields extends Model
{
    protected $table = 'widget_fields';

    protected $fillable = [
        'widget_id',
        'field_name',
        'field_value',
    ];

}
