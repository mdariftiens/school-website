<!--==================Media upload configuration html=========-->
<div class="mb-3 from_feature_area">
    {!! old('featueImageInputFieldOldValue') !!}
    @if(isset($row->media))
        <div class="row">
            @include('admin::media_uploader_modal.feature_image_placeholder_edit')
        </div>
    @endif
</div>
<input type="hidden" id="featueImageInputFieldOldValue" name="featueImageInputFieldOldValue" value="{{ old('featueImageInputFieldOldValue') }}">
<div class="mb-3 mt-5">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <button type="button" id="add_feature_image" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Feature Image</button>
        </div>
    </div>
</div>
<!--==================Media upload configuration html=========-->
