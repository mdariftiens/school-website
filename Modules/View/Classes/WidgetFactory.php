<?php

namespace Modules\View\Classes;


class WidgetFactory
{
    public static function getWidget($type)
    {
        $class = "Modules\View\Widgets\\" . snakeCaseToCamelCase($type) . "Widgets";
        return new $class();
    }
}
