<?php

namespace Modules\View\Widgets;

use App\Models\Achievements\Achievements;
use Modules\View\Abstracts\Widget;

class AchievementWidgets extends Widget
{
    function data()
    {
        $limitAchievementNumber = (int) getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields,'limit_achievement_number');
        return Achievements::latest()->take($limitAchievementNumber)->get();
    }
}
