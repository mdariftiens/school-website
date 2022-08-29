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
        ->get();

    if (!$widgetIdArray){
        return '';
    }

    $widgetsWithWidgetDetail = Modules\Backend\Entities\Widgets\Widgets::with('widgetFields')
        ->whereIn('id', $widgetIdArray)
        ->get();

    $widgetsHtml = '';
        foreach ($widgetsWithWidgetDetail as $widgetWithWidgetDetail){
            $widgetsHtml .=  \Modules\Frontend\Widgets\NoticeWidgets::show($widgetWithWidgetDetail);
        }
    return $widgetsHtml;

}
