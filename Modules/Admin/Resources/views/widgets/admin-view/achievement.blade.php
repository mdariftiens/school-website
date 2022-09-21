
@if(isset($widgetDetail))
    <div class="mb-3">
        <label for="limit_notice_number" class="form-label">Limit Achievement Number</label>
        <input type="number" class="form-control" name="achievement[limit_achievement_number]" id="limit_achievement_number"
               value="{{ old('notice')['limit_achievement_number'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'limit_achievement_number')  }}"
        >
    </div>
@else
    <div class="mb-3">
        <label for="limit_notice_number" class="form-label">Limit notice number</label>
        <input type="number" class="form-control" name="achievement[limit_achievement_number]" id="limit_achievement_number"
               required
               value="{{ old('notice')['limit_achievement_number'] ?? 5  }}"
        >
    </div>
@endif

