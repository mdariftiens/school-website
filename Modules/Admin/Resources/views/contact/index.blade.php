@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Contact-us')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">

            <div class="card-header flex-column flex-md-row">
                <div class="head-label">
                    <h5 class="card-title mb-0">Contact List</h5>
                </div>
            </div>
            @if(count($list)>0)
            <div class=" table-responsive">
                @include("admin::messages.message")
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th> Email</th>
                            <th> Phone</th>                          
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($list as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>                           
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <a href="{{ route('contact.show', $value->id) }}" class="dropdown-item">Details</a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('contact.destroy', $value->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="dropdown-item text-danger delete-record">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if ($list->hasPages())
                <div class="d-flex justify-content-center mt-3">
                    {{ $list->links('pagination::bootstrap-4')}}
                </div>
                @else
                <h4 class="text-center"><b>Data Not Available</b></h4>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection