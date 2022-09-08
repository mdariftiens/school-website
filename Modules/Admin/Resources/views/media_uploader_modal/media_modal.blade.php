<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
    .selectImage{
        border: 6px solid #5F61E6;
        padding: 4px;
        border-radius: 10px;
    }
    .media_pagination{
        margin-top: 52px;
    }
    .media_pagination ul{
        list-style: none;
        display: inline-block;
        padding: 0px;
    }
    .media_pagination ul li{
        display: inline-block;
        background: #ddd;
        margin: 0px 6px;
        padding: 2px 12px;
    }
</style>
<div class="row">
    <div class="col-md-10">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Media Uploader</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-sm-8 col-md-8" style="border-right: 1px solid #ddd">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <select class="form-select" name="mediaType" id="mediaType">
                                            <option value="*">All</option>
                                            <option value="png">png</option>
                                            <option value="jpeg">jpeg</option>
                                            <option value="jpg">jpg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="media_area">
                                    <div class="row media_content"></div>
                                    <div class="media_pagination">

                                    </div>
                                </div>

                                <div class="selected_media">
                                    <div class="selected_media_content">
                                        <?php if(old('mediaInputValue')){ ?>
                                            {!! old('mediaInputValue') !!}
                                        <?php }else{ ?>
                                            <div class="row">
                                                @if(isset($row->media))
                                                    @include('admin::media_uploader_modal.media_edit_data')
                                                @endif
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" id="media_insert">Media Insert</button>
                                        </div>
                                    </div>
                                </div>

                                <!---------------feature image html section-------------->
                                <div class="selected_feature_image">
                                    <div class="selected_media_content">
                                        <?php if(old('featured_image_link')){ ?>
                                        {!! old('featured_image_link') !!}
                                        <?php }else{ ?>
                                        <div class="row">
                                            @if(isset($row->featured_image_link))
                                                @include('admin::media_uploader_modal.media_edit_data')
                                            @endif
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" id="feature_image_insert">Set Feature Image</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-4 col-md-4">
                                <form action="{{ route('media.store') }}" class="dropzone" id="my-great-dropzone"></form>
                                <script>

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--dropjone From-->

@push('pricing-script')
<script src="{{ asset('js/admin/media.js') }}"></script>
@endpush
