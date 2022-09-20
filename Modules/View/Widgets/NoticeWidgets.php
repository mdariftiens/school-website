<?php

namespace Modules\View\Widgets;

use App\Models\Notice\Notice;
use Modules\View\Abstracts\Widget;

class NoticeWidgets extends Widget
{

    function data()
    {
        $limitNoticeNumber = getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields, 'limit_notice_number');
        $noticeHeight = getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields, 'notice_height');
        return Notice::take($limitNoticeNumber)->get();
    }
}
