<?php

function getWidgetCustomFieldValue($widgetFieldsCollection,$fieldName){
    return optional($widgetFieldsCollection->where('field_name',$fieldName)->first())->field_value;
}



function getOptions(){
    static $options = null;
    if(!$options){
        $options = App\Models\Option\Option::where('is_autoload', App\Models\Option\Option::AUTOLOAD)
            ->select(['name','value'])
            ->get()
            ->toArray();
    }
    return $options;
}

/**
 * @param $sidebarName
 * @return string as HTML
 */
function getSidebarWithWidgets($sidebarName){
    $widgetIdArray = \Modules\Backend\Entities\Widgets\WidgetBar::select('widget_id')
        ->where('sidebar_name',$sidebarName)
        ->orderBy('display_serial_number')
        ->get()
        ->pluck('widget_id')
        ->toArray();

    if (!$widgetIdArray){
        return '';
    }


    $widgetsWithWidgetDetail = Modules\Backend\Entities\Widgets\Widgets::with('widgetFields')
        ->whereIn('id', $widgetIdArray)
        ->get();

    $widgetsHtml = '';

    foreach ($widgetIdArray as $widgetId) {
        $widgetWithWidgetDetail = $widgetsWithWidgetDetail->where('id', $widgetId)->first();
        $widget = \Modules\Frontend\Classes\WidgetFactory::getWidget($widgetWithWidgetDetail->type);
        $widgetsHtml .=  $widget->show($widgetWithWidgetDetail);
    }

    return $widgetsHtml;

}

function snakeCaseToCamelCase($string){
    // suppose string like : visitor_counter || visitor-counter
    $str = str_replace(['_','-'],' ', $string); // visitor counter
    $str = ucfirst($str); // Visitor Counter
    $str = str_replace(" ",'', $str); // VisitorCounter
    return $str;
}
