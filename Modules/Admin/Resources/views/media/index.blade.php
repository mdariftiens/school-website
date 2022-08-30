@extends('admin::layouts/contentNavbarLayout')

@section('title', 'Media Manager')

@section('content')

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Media List</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">

                        <div class="">
                            <label for="mediaType" class="form-label">Select Media</label>

                            <select class="form-select" name="mediaType" id="mediaType">
                                <option value="*">All</option>
                                @foreach($mediaTypeList as $mediaType)
                                    <option value="{{$mediaType}}">{{ $mediaType }}</option>
                                @endforeach
                            </select>


                            <div class="dt-buttons">

                                <a class="dt-button create-new btn btn-primary"
                                   href="#">
                                <span><i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Add Media</span>
                                </span>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="col-4">
                        <form action="/target" class="dropzone" id="my-great-dropzone"></form>

                        <script>
                            Dropzone.options.myGreatDropzone = { // camelized version of the `id`
                                paramName: "file", // The name that will be used to transfer the file
                                maxFilesize: 1000, // MB
                                accept: function(file, done) {
                                    if (file.name == "justinbieber.jpg") {
                                        done("Naha, you don't.");
                                    }
                                    else { done(); }
                                }
                            };
                        </script>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <style>

        .add_file_form{
            width: 300px;
            display: block;
            position: absolute;
            top: 0;
            right: 0;
        }

    </style>
    <script>
        $(document).ready(function(){
            $('.delete').on('click',function () {
                if(confirm("are you sure to delete?")){

                    id = $(this).data('id');
                    url = "{{ route('widgets.destroy','@@@') }}"
                    url = url.replace("@@@",id)

                    $.ajax(
                        {
                            url: url,
                            type: 'DELETE',
                            data: {
                                "id": id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function (){
                                console.log('.row-'+id);
                                $('.row-'+id).fadeOut(1000,function(){
                                    $('.row-'+id).empty()
                                })
                            }
                        });

                }
            })
        })
    </script>

@endsection
