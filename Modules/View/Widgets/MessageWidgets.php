<?php

namespace Modules\View\Widgets;

use App\Models\Message\Message;
use Modules\View\Abstracts\Widget;

class MessageWidgets extends Widget
{

    function data()
    {
        $numberOfMessageShow = getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields,'number_of_notice_show');
        return Message::take($numberOfMessageShow)->get();
    }
}
