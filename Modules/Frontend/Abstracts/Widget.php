<?php

namespace Modules\Frontend\Abstracts;

abstract class Widget
{

    abstract  function data();

    public  function show($widgetWithWidgetDetail)
    {
        $data = [
            'widgetWithWidgetDetail' => $widgetWithWidgetDetail,
            'data' => $this->data()
        ];

        $view = 'frontend::Widgets/'  . $widgetWithWidgetDetail->type . '/' . $widgetWithWidgetDetail->header_template;

        return view($view, $data);
    }
}
