<?php

namespace Modules\Admin\Entities\Widgets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Abstracts\AdminModel;

class WidgetFields extends AdminModel
{
    protected $table = 'widget_fields';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'field_name',
        'field_value',
    ];

}
