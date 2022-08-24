<?php

namespace Modules\Backend\Entities\Widgets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Backend\Abstracts\BackendModel;

class WidgetBar extends BackendModel
{
    protected $table = 'widget_bar';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'sidebar_name',
        'display_serial_number',
    ];

}
