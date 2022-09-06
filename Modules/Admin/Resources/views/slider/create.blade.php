@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Slider - list')

@section('content')
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
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Slider Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('slider.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    @include("admin::messages.message")
                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('slider.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="english_title">English Title</label>
                                <input type="text" class="form-control" name="english_title" id="english_title" placeholder="English Title" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" id="bangla_title" placeholder="Bangla Title" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="english_description">English Description</label>
                                <textarea class="form-control" placeholder="English description" name="english_description" rows="3" value="{{ old('english_description') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_description">Bangla Description</label>
                                <textarea class="form-control" placeholder="Bangla description" name="bangla_description" rows="3" value="{{ old('bangla_description') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority" placeholder="Priority" value="{{ old('priority') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="is_published">Status</label>
                                <select class="form-select" name="is_published" id="is_published">
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                            <!--==================Media upload configuration html=========-->
                            <div class="mb-3 from_media_area"> {!! old('mediaInputValue') !!} </div>
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
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

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
                                                                <div class="row"></div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-primary" id="media_insert">Media Insert</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-md-4">
                                                        <form action="{{ route('media.store') }}" class="dropzone" id="my-great-dropzone"></form>
                                                        <script>
                                                            Dropzone.options.myGreatDropzone = { // camelized version of the `id`
                                                                paramName: "file", // The name that will be used to transfer the file
                                                                maxFilesize: 1000, // MB
                                                                headers: {
                                                                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                                                },
                                                                accept: function(file, done) {
                                                                    if (file.name == "justinbieber.jpg") {
                                                                        done("Naha, you don't.");
                                                                    }
                                                                    else { done(); }

                                                                    console.log('done', done)
                                                                    console.log('file', file)
                                                                },
                                                                init: function() {
                                                                    this.on('error', function(file, errorMessage) {
                                                                        console.log('errorMessage', errorMessage)
                                                                        console.log('file', file)
                                                                        alert("error");
                                                                        // if (file.accepted) {
                                                                        //     var mypreview = document.getElementsByClassName('dz-error');
                                                                        //     mypreview = mypreview[mypreview.length - 1];
                                                                        //     mypreview.classList.toggle('dz-error');
                                                                        //     mypreview.classList.toggle('dz-success');
                                                                        // }
                                                                    });

                                                                    this.on('success', function(file, m) {
                                                                        console.log('m', m)
                                                                        console.log('file', file)
                                                                        alert("ok");
                                                                        // window.location = window.location;
                                                                        // if (file.accepted) {
                                                                        //     var mypreview = document.getElementsByClassName('dz-error');
                                                                        //     mypreview = mypreview[mypreview.length - 1];
                                                                        //     mypreview.classList.toggle('dz-error');
                                                                        //     mypreview.classList.toggle('dz-success');
                                                                        // }
                                                                    });
                                                                }
                                                            };
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--dropjone From-->

                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('pricing-script')
        <script src="{{ asset('js/admin/media.js') }}"></script>
    @endpush
