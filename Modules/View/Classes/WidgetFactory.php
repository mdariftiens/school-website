<?php

namespace Modules\View\Classes;

use Modules\View\Abstracts\Widget;

class WidgetFactory
{
    public static function getWidget($type): Widget
    {
        return new ("Modules\Frontend\Widgets\\" . snakeCaseToCamelCase($type) . "Widgets")();
    }
}
