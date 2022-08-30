
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="limit_news_number" class="form-label">Limit news number</label>
    <input type="number" class="form-control" name="news[limit_news_number]" id="limit_news_number"
           value="{{ old('news')['limit_news_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_news_number')  }}"
    >
</div>

@else
    <div class="mb-3">
        <label for="limit_news_number" class="form-label">Limit news number</label>
        <input type="number" class="form-control" name="news[limit_news_number]" id="limit_news_number"
               required
               value="{{ old('news')['limit_news_number'] ?? 5  }}"
        >
    </div>
@endif

