<?php

namespace Modules\View\Widgets;

use App\Models\Message\Message;
use Modules\View\Abstracts\Widget;

class MessageWidgets extends Widget
{

    function data()
    {
        $numberOfMessageShow = getWidgetCustomFieldValue($this->widgetWithWidgetDetail->widgetFields,'limit_message_number');
        return Message::take($numberOfMessageShow)->orderBy('priority', 'asc')->get();
    }
}
