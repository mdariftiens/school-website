@extends('admin::layouts/contentNavbarLayout')

@section('title', 'Widgets - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            @include("admin::messages.message")
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Widget List</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('widgets.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>


                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span><i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Add New</span>
                                </span>                                </button>
                                <ul class="dropdown-menu" style="">
                                    @foreach($widgetTypeList as $key=>$widgetType)
                                    <li><a class="dropdown-item" href="{{ route('widgets.create') }}?widgetType={{$key}}">{{$widgetType}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">

                    <table class="table text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>type</th>
                            <th>English Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                        @forelse($list as $item)
                            <tr class="row-{{ $item->id }}">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->english_title }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{ route('widgets.edit',$item->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item delete" href="javascript:void(0);" data-id="{{ $item->id }}"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <div class="text-center text-info">No widgets found!</div>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
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
