
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="fb_link" class="form-label">FB link</label>
    <input type="number" class="form-control" name="social[fb_link]" id="fb_link"
           value="{{ old('social')['fb_link'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'fb_link')  }}"
    >
</div>
@else
    <div class="mb-3">
        <label for="fb_link" class="form-label">Fb link</label>
        <input type="number" class="form-control" name="social[fb_link]" id="fb_link"
               required
               value="{{ old('social')['fb_link'] ?? ''  }}"
        >
    </div>
@endif

