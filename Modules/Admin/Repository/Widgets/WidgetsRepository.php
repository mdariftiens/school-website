<?php

namespace Modules\Admin\Repository\Widgets;

use Modules\Admin\Entities\Widgets\WidgetBar;
use Modules\Admin\Entities\Widgets\WidgetFields;
use Modules\Admin\Entities\Widgets\Widgets;

class WidgetsRepository
{
    public function getWidgetType():array
    {
        return[
            'message' => 'Message',
            'notice' => 'Notice',
            'event' => 'Event',
            'news' => 'News',
//            'visitor_counter' => 'Visitor Counter',
            'custom' => 'Custom',
            'social' => 'Social',
            'achievement' => 'Achievement',
        ];
    }
    public function getActiveWidgets()
    {
        return Widgets::get();
    }

    public function getSidebarWidget($sidebarId)
    {
        return WidgetBar::select('widgets.id','widgets.type','widgets.bangla_title','widgets.english_title','display_serial_number')
            ->join('widgets','widgets.id','widget_bar.widget_id')
            ->where('sidebar_name', $sidebarId)
            ->where('widgets.deleted_at', null)
            ->orderBy('display_serial_number')
            ->get();

    }

    public function createOrUpdate(\Illuminate\Http\Request $request)
    {
        $widgetId = '';

        if ($request->id){
            $widgetId = $request->id;
            Widgets::find($widgetId)->update($request->all());
            WidgetFields::where('widget_id', $widgetId)->forceDelete();

        }else{
            $widget = Widgets::create($request->all());
            $widgetId = $widget->id;
        }
        $widgetFields = $request->{$request->type};


        if (!is_array($widgetFields) || count($widgetFields)==0)
        {
            return;
        }

        foreach ($widgetFields as $fieldName => $fieldValue)
        {
            WidgetFields::create([
                'widget_id' => $widgetId,
                'field_name' => $fieldName,
                'field_value' => $fieldValue,
            ]);
        }

    }

    public function getWidgetDetailData($widgetId)
    {
        return Widgets::with('widgetFields')->find($widgetId);
    }

    public function delete($widgetId)
    {
        Widgets::where('id', $widgetId)->forceDelete();
        WidgetFields::where('widget_id', $widgetId)->forceDelete();
        WidgetBar::where('widget_id', $widgetId)->forceDelete();
    }


}
