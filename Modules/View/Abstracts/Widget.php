<?php

namespace Modules\View\Abstracts;

abstract class Widget
{
    public $widgetWithWidgetDetail;

    abstract  function data();

    public  function show($widgetWithWidgetDetail)
    {
        $this->widgetWithWidgetDetail = $widgetWithWidgetDetail;

        $data = [
            'widgetWithWidgetDetail' => $widgetWithWidgetDetail,
            'data' => $this->data()
        ];
        $view = "view::".getCurrentThemeId().'/Widgets/'  . $widgetWithWidgetDetail->type . '/' . $widgetWithWidgetDetail->header_template;

        return view($view, $data);
    }
}
