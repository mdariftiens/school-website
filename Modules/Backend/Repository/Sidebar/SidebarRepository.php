<?php

namespace Modules\Backend\Repository\Sidebar;

use Illuminate\Http\Request;
use Modules\Backend\Classes\Themes;
use Modules\Backend\Entities\Widgets\WidgetBar;

class SidebarRepository
{
    private $themes;

    public function __construct()
    {
        $this->themes = new Themes();
    }

    public function getFrontEndThemeInfo()
    {
        return $this->themes->getThemeName();
    }
    public function getSidebarList()
    {
        return $this->themes->getSidebarList('primary');
    }

    public function update($sidebarName, Request $request)
    {
        WidgetBar::where('sidebar_name', $sidebarName)->forceDelete();

        $i = 1;
        if($request->widget_id && is_array($request->widget_id) ){

            foreach ($request->widget_id as $widgetId){

                WidgetBar::create([
                    'widget_id' => $widgetId,
                    'sidebar_name' => $sidebarName,
                    'display_serial_number' => $i++,
                ]);
            }
        }
    }
}
