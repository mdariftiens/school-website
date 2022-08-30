
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="limit_notice_number" class="form-label">Limit notice number</label>
    <input type="number" class="form-control" name="notice[limit_notice_number]" id="limit_notice_number"
           value="{{ old('notice')['limit_notice_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_notice_number')  }}"
    >
</div>

<div class="mb-3">
    <label for="notice_height" class="form-label">Notice Height</label>
    <input type="text" class="form-control" name="notice[notice_height]" id="notice_height"
           value="{{ old('notice')['notice_height'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'notice_height')  }}"
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


    <div class="mb-3">
        <label for="notice_height" class="form-label">Notice Height</label>
        <input type="text" class="form-control" name="notice[notice_height]" id="notice_height"
               value="{{ old('notice')['notice_height'] ?? ''  }}"
        >
    </div>
@endif

