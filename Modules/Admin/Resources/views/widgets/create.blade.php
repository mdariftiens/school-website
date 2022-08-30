@extends('admin::layouts/contentNavbarLayout')

@section('bangla_title', 'Widgets - create')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-bangla_title mb-0">Create Widget</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('widgets.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="">
                    <form action="{{route('widgets.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="{{ request()->widgetType }}">
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="header_template" class="form-label">Select Header Template</label>
                                <select class="form-select" id="header_template" name="header_template" aria-label="Default select example">
                                    <option selected="">Template</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="bangla_title" class="form-label">Bangla Title</label>
                                <input id="bangla_title" type="text" class="form-control" name="bangla_title" placeholder="bangla_title here..." required>
                                @error('bangla_title')<span>{{ $error['bangla_title'] }}</span>@enderror

                            </div>

                            <div class="mb-3">
                                <label for="english_title" class="form-label">English Title</label>
                                <input id="english_title" type="text" class="form-control" name="english_title" placeholder="english_title here..." required>
                                @error('english_title')<span>{{ $error['english_title'] }}</span>@enderror

                            </div>

                            <div class="mb-3">
                                <label for="header_show_hide" class="form-label">Header Show/Hide</label>
                                <select class="form-select" id="header_show_hide" name="header_show_hide" aria-label="Default select example">
                                    <option selected value="1">Show</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="header_background_color" class="form-label">Header Background Color</label>
                                <input id="header_background_color" type="color" class="form-control" name="header_background_color" >
                            </div>

                            <div class="mb-3">
                                <label for="header_text_color" class="form-label">Header Text Color</label>
                                <input type="color" class="form-control" id="header_text_color" name="header_text_color" >
                            </div>

                            <div class="mb-3">
                                <label for="header_hover_color" class="form-label">Header Hover Color</label>
                                <input type="color" class="form-control" name="header_hover_color" id="header_hover_color">
                            </div>

                            <div class="mb-3">
                                <label for="content_background_color" class="form-label">Content Background Color</label>
                                <input type="color" class="form-control" name="content_background_color" id="content_background_color">
                            </div>

                            <div class="mb-3">
                                <label for="content_text_color" class="form-label">Content Text Color</label>
                                <input type="color" class="form-control" name="content_text_color" id="content_text_color">
                            </div>

                            <div class="mb-3">
                                <label for="content_hover_color" class="form-label">Content Hover Color</label>
                                <input type="color" class="form-control" name="content_hover_color" id="content_hover_color">
                            </div>

                            @php
                                $widgetType = "admin::widgets.admin-view." . request()->widgetType;
                            @endphp
                            @include( $widgetType )

                            <br>
                            <button class="dt-button create-new btn btn-primary" type="submit">
                                <span><i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Save </span>
                                </span>
                            </button>
                        </div>

                    </form>
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
