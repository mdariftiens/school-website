<?php

namespace Modules\View\Widgets;

use App\Models\News\News;
use Modules\View\Abstracts\Widget;

class NewsWidgets extends Widget
{

    function data()
    {
        $limitNewsNumber = (int) getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields,'limit_news_number');
        return News::latest()->take($limitNewsNumber)->get();
    }
}
