
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="limit_event_number" class="form-label">Limit event number</label>
    <input type="number" class="form-control" name="event[limit_event_number]" id="limit_event_number"
           value="{{ old('event')['limit_event_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_event_number')  }}"
    >
</div>

<div class="mb-3">
    <label for="event_height" class="form-label">event Height</label>
    <input type="text" class="form-control" name="event[event_height]" id="event_height"
           value="{{ old('event')['event_height'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'event_height')  }}"
    >
</div>
@else
    <div class="mb-3">
        <label for="limit_event_number" class="form-label">Limit event number</label>
        <input type="number" class="form-control" name="event[limit_event_number]" id="limit_event_number"
               required
               value="{{ old('event')['limit_event_number'] ?? 5  }}"
        >
    </div>


    <div class="mb-3">
        <label for="event_height" class="form-label">event Height</label>
        <input type="text" class="form-control" name="event[event_height]" id="event_height"
               value="{{ old('event')['event_height'] ?? ''  }}"
        >
    </div>
@endif

