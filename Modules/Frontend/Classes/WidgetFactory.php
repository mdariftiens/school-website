<?php

namespace Modules\Frontend\Classes;

use Modules\Frontend\Abstracts\Widget;

class WidgetFactory
{
    public static function getWidget($type): Widget
    {
        return new ("Modules\Frontend\Widgets\\" . snakeCaseToCamelCase($type) . "Widgets")();
    }
}
