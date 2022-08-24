<?php

function getWidgetCustomFieldValue($widgetFieldsCollection,$fieldName){
    return optional($widgetFieldsCollection->where('field_name',$fieldName)->first())->field_value;
}
