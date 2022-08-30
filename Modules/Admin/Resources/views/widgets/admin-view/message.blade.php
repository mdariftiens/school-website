
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="limit_message_number" class="form-label">Limit message number</label>
    <input type="number" class="form-control" name="message[limit_message_number]" id="limit_message_number"
           value="{{ old('message')['limit_message_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_message_number')  }}"
    >
</div>
@else
    <div class="mb-3">
        <label for="limit_message_number" class="form-label">Limit message number</label>
        <input type="number" class="form-control" name="message[limit_message_number]" id="limit_message_number"
               required
               value="{{ old('message')['limit_message_number'] ?? 5  }}"
        >
    </div>
@endif

