<!--==================Media upload configuration html=========-->
<div class="mb-3 from_media_area">
    {!! old('mediaInputValue') !!}
    @if(isset($row->media))
    <div class="row">
            @include('admin::media_uploader_modal.media_edit_data')
    </div>
    @endif
</div>
<input type="hidden" id="inputFieldOldValue" name="mediaInputValue" value="{{ old('mediaInputValue') }}">
<div class="mb-3 mt-5">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <button type="button" id="add_media_or_video" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Media/Video</button>
        </div>
    </div>
</div>
<!--==================Media upload configuration html=========-->
