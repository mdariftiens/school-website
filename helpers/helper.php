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

