@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog category - Edit')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">

            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Blog Category Edit</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('blog.category.index') }}">
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
                        <form method="post" action="{{ route('blog.category.update', $row->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Title *</label>
                                <input type="text" class="form-control" name="english_title" placeholder="Category english title" value="{{ $row->english_title }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Title *</label>
                                <input type="text" class="form-control" name="bangla_title" placeholder="Category bangla title" value="{{ $row->bangla_title }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Detail</label>
                                <textarea name="bangla_detail" class="form-control">{{$row->bangla_detail}}</textarea>
                                @if ($errors->has('bangla_detail'))
                                    <span class="text-danger">{{ $errors->first('bangla_detail') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Detail</label>
                                <textarea name="english_detail" class="form-control">{{$row->english_detail}}</textarea>
                                @if ($errors->has('english_detail'))
                                    <span class="text-danger">{{ $errors->first('english_detail') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
