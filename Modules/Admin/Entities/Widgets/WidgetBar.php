<?php

namespace Modules\Admin\Entities\Widgets;

use App\Abstracts\Model;

class WidgetBar extends Model
{
    protected $table = 'widget_bar';

    protected $fillable = [
        'widget_id',
        'sidebar_name',
        'display_serial_number',
    ];

}
