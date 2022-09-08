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

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            @foreach($list as $item)
                                <div class="col-3  ">
                                    <div class="card m-2" style="width: 200px">
                                        @if(isImage($item->filename))
                                            <img src="{{ $item->url }}" alt="{{ $item->filename }}">
                                        @else
                                            <img src="https://img.icons8.com/dusk/344/file--v2.png" alt="{{ $item->filename }}">

                                        @endif
                                        <div class="text-center"> {{ $item->filename }} </div>
                                            <button  class="btn btn-danger btn-sm"
                                                     data-id = "{{ $item->id }}
                                                     data-bangla_title = "{{ $item->bangla_title }}
                                                     data-english_title = "{{ $item->english_title }}
                                                     data-filename = "{{ $item->filename }}
                                            >
                                            Detail
                                            </button>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-4">

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

                                        //window.location = window.location;
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
