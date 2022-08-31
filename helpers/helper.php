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
    $widgetIdArray = \Modules\Admin\Entities\Widgets\WidgetBar::select('widget_id')
        ->where('sidebar_name',$sidebarName)
        ->orderBy('display_serial_number')
        ->get()
        ->pluck('widget_id')
        ->toArray();

    if (!$widgetIdArray){
        return '';
    }


    $widgetsWithWidgetDetail = Modules\Admin\Entities\Widgets\Widgets::with('widgetFields')
        ->whereIn('id', $widgetIdArray)
        ->get();

    $widgetsHtml = '';

    foreach ($widgetIdArray as $widgetId) {
        $widgetWithWidgetDetail = $widgetsWithWidgetDetail->where('id', $widgetId)->first();
        $widget = \Modules\View\Classes\WidgetFactory::getWidget($widgetWithWidgetDetail->type);
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


function isImage($fileName){
    $extension = last(explode('.', $fileName));
    $imgExtArr = ['jpg', 'jpeg', 'png'];
    return in_array($extension, $imgExtArr);
}

function getCurrentThemeId(){
    return \App\Models\Option\Option::where('name','current_theme_id')->first()->value;
}

function getThemeOptions():array{
    static $items = null;
    if ($items){
        return $items;
    }
    return $items = App\Models\Option\Option::select('name','value')->get()->pluck('value','name')->toArray();
}

function isSidebarActive($sidebarName):bool{
    $themeOptions = getThemeOptions();
    $sidebarId = 'is_'.$sidebarName.'_sidebar_active';
    if (key_exists($sidebarId, $themeOptions)){
        return $themeOptions[$sidebarId];
    }
    return false;
}
