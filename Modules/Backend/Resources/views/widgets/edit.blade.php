@extends('backend::layouts/contentNavbarLayout')

@section('title', 'Widgets - Edit')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Edit Widget</h5>
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
                    <form action="{{route('widgets.update',['widget'=>$widgetDetail->id])}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="type" value="{{ $widgetDetail->type }}">
                        <input type="hidden" name="id" value="{{ $widgetDetail->id }}">
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="header_template" class="form-label">Select Header Template</label>
                                <select class="form-select" id="header_template" name="header_template" aria-label="Default select example">
                                    <option selected="">Template</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="bangla_title" class="form-label">Bangla Title</label>
                                <input id="bangla_title" type="text" class="form-control" name="bangla_title" placeholder="bangla_title here..." required  value="{{ old('bangla_title',$widgetDetail->bangla_title) }}">
                                @error('bangla_title')<span class="text-danger">{{ $message }}</span>@enderror

                            </div>

                            <div class="mb-3">
                                <label for="english_title" class="form-label">Englis title</label>
                                <input id="english_title" type="text" class="form-control" name="english_title" placeholder="english_title here..." required  value="{{ old('english_title',$widgetDetail->english_title) }}">
                                @error('english_title')<span class="text-danger">{{ $message }}</span>@enderror

                            </div>


                            <div class="mb-3">
                                <label for="header_background_color" class="form-label">Header Background Color</label>
                                <input id="header_background_color" type="color" class="form-control" name="header_background_color"  value="{{ old('header_background_color',$widgetDetail->header_background_color) }}">
                            </div>

                            <div class="mb-3">
                                <label for="header_text_color" class="form-label">Header Text Color</label>
                                <input type="color" class="form-control" id="header_text_color" name="header_text_color"  value="{{ old('header_text_color',$widgetDetail->header_text_color) }}">
                            </div>

                            <div class="mb-3">
                                <label for="header_hover_color" class="form-label">Header Hover Color</label>
                                <input type="color" class="form-control" name="header_hover_color" id="header_hover_color" value="{{ old('header_hover_color',$widgetDetail->header_hover_color) }}">
                            </div>

                            <div class="mb-3">
                                <label for="content_background_color" class="form-label">Content Background Color</label>
                                <input type="color" class="form-control" name="content_background_color" id="content_background_color" value="{{ old('content_background_color',$widgetDetail->content_background_color) }}">
                            </div>

                            <div class="mb-3">
                                <label for="content_text_color" class="form-label">Content Text Color</label>
                                <input type="color" class="form-control" name="content_text_color" id="content_text_color" value="{{ old('content_text_color',$widgetDetail->content_text_color) }}">
                            </div>

                            <div class="mb-3">
                                <label for="content_hover_color" class="form-label">Content Hover Color</label>
                                <input type="color" class="form-control" name="content_hover_color" id="content_hover_color">
                            </div>

                            @php
                                $widgetType = "backend::widgets.admin-view." . $widgetDetail->type ;
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
