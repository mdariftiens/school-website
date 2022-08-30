<?php

namespace Modules\Admin\Entities\Widgets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Abstracts\AdminModel;

class WidgetBar extends AdminModel
{
    protected $table = 'widget_bar';

    use HasFactory;

    protected $fillable = [
        'widget_id',
        'sidebar_name',
        'display_serial_number',
    ];

}
