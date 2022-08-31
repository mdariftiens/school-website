<?php

namespace Modules\View\Abstracts;

abstract class Widget
{

    abstract  function data();

    public  function show($widgetWithWidgetDetail)
    {
        $data = [
            'widgetWithWidgetDetail' => $widgetWithWidgetDetail,
            'data' => $this->data()
        ];

        $view = getCurrentThemeId().'/Widgets/'  . $widgetWithWidgetDetail->type . '/' . $widgetWithWidgetDetail->header_template;

        return view($view, $data);
    }
}
