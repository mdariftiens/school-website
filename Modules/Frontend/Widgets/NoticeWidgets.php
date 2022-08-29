<?php

namespace Modules\Frontend\Widgets;

use Modules\Frontend\Abstracts\Widget;

class NoticeWidgets extends Widget
{

    /**
     * Widget
     */
    public static function show($widgetWithWidgetDetail)
    {
        $data = [
            'widgetWithWidgetDetail' => $widgetWithWidgetDetail
        ];

        $view = 'frontend::Widgets/'  . $widgetWithWidgetDetail->type . '/' . $widgetWithWidgetDetail->header_template;

        return view($view, $data);
    }
}
