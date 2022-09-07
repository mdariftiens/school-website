@foreach($row->media as $media)
<div class="col-md-2" data-id="media_<?= $media->id ?>">
    <label class="mediaImagelabel media_<?= $media->id ?> selectImage" id="<?= $media->id ?>"><img style="width: 100%" src="{{ $media->url }}"></label>
    <input type="hidden" id="media_<?= $media->id ?>" name="mediaids[]" value="{{ $media->id }}">
</div>
@endforeach

