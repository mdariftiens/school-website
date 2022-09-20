@if($widgetWithWidgetDetail->header_show_hide == 1)
<h4 class="text-2xl font-medium mb-2">

    {!! $widgetWithWidgetDetail->bangla_title !!}
</h4>
@endif
{!! getWidgetCustomFieldValue($widgetWithWidgetDetail->widgetFields,'bangla_text_or_html') !!}

