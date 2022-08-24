
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="limit_notice_number" class="form-label">Limit notice number</label>
    <input type="number" class="form-control" name="notice[limit_notice_number]" id="limit_notice_number"
           value="{{ old('notice')['limit_notice_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_notice_number')  }}"
    >
</div>
@else
    <div class="mb-3">
        <label for="limit_notice_number" class="form-label">Limit notice number</label>
        <input type="number" class="form-control" name="notice[limit_notice_number]" id="limit_notice_number"
               required
               value="{{ old('notice')['limit_notice_number'] ?? 5  }}"
        >
    </div>
@endif

