
@if(isset($widgetDetail))
<div class="mb-3">
    <label for="bangla_text_or_html" class="form-label">Bangla here (Text/Html)</label>
    <textarea class="form-control" name="custom[bangla_text_or_html]" id="bangla_text_or_html" required cols="30" rows="10">{{ old('custom')['bangla_text_or_html'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'bangla_text_or_html')  }}</textarea>
</div>
<div class="mb-3">
    <label for="english_text_or_html" class="form-label">English here (Text/Html)</label>
    <textarea class="form-control" name="custom[english_text_or_html]" id="english_text_or_html" required cols="30" rows="10">{{ old('custom')['english_text_or_html'] ?? getWidgetCustomFieldValue($widgetDetail->widgetFields,'english_text_or_html')  }}</textarea>
</div>
@else

    <div class="mb-3">
        <label for="bangla_text_or_html" class="form-label">Bangla here (Text/Html)</label>
        <textarea class="form-control" name="custom[bangla_text_or_html]" id="bangla_text_or_html" required cols="30" rows="10">{{ old('custom')['bangla_text_or_html'] ?? ''  }}</textarea>
    </div>
    <div class="mb-3">
        <label for="english_text_or_html" class="form-label">English here (Text/Html)</label>
        <textarea class="form-control" name="custom[english_text_or_html]" id="english_text_or_html" required cols="30" rows="10">{{ old('custom')['english_text_or_html'] ?? ''  }}</textarea>
    </div>
@endif

@section('page-script')   
<script>
    CKEDITOR.replace( 'custom[bangla_text_or_html]',{height: 500} );
    CKEDITOR.replace( 'custom[english_text_or_html]',{height: 500} );
</script>
@endsection

