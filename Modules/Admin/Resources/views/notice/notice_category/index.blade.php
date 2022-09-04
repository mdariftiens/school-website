@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Notice - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Notice Category List</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('notice-category.create') }}">
                                    <span><i class="bx bx-plus me-sm-2"></i>
                                        <span class="d-none d-sm-inline-block">Add New</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    @include("admin::messages.message")
                    <table class="table text-nowrap">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>English Name</th>
                            <th>Bangla Name</th>
                            <th style="text-align: center">Number of Event</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @if($list)
                            <?php $i=0; foreach($list as $value){ $i++; ?>
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->english_name }}</td>
                                    <td>{{ $value->bangla_name }}</td>
                                    <td style="text-align: center">{{ $value->number_of_notice }}</td>
                                    <td>
                                        <div class="d-inline-block">
                                            <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                                <a href="javascript:;" class="dropdown-item">Details</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('notice-category.destroy', $value->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger delete-record">Delete</button>
                                                </form>
                                            </div>
                                        </div> | <a href="{{ route('notice-category.edit', $value->id) }}" class="item-edit text-body"><i class="bx bxs-edit"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        @endif
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
