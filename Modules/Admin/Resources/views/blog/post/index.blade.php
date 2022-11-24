@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog Post - List')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">

            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h5 class="card-title mb-0">Blog Post List</h5>
                </div>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('blog.post.create') }}">
                                <span><i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Add New</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" table-responsive">
                @include('admin::messages.message')
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>English Title</th>
                            <th> Status</th>
                            <th>Type</th>
                            <th> Visibility</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if($list)
                        @foreach ($list as $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->english_title }}</td>
                            <td>{{ ucfirst($value->status) }}</td>
                            <td>{{ ucfirst($value->type) }}</td>
                            <td>{{ ucfirst($value->visibility) }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <a href="{{ route('blog.post.show', $value->id) }}"
                                            class="dropdown-item">Details</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('blog.post.destroy', $value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="dropdown-item text-danger delete-record">Delete</button>
                                        </form>
                                    </div>
                                </div> | <a href="{{ route('blog.post.edit', $value->id) }}"
                                    class="item-edit text-body"><i class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                @if($list->hasPages())
                <div class="d-flex justify-content-center mt-3">
                    {{ $list->links('pagination::bootstrap-4') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection