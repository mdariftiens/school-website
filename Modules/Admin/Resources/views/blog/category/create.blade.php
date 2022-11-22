@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog category - New')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">

            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Blog Category Create</h5>
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
                        <form method="post" action="{{ route('blog.category.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Title</label>
                                <input type="text" class="form-control" name="english_title" placeholder="Category english Title" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" placeholder="Category bangla Title" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">bangla detail</label>
                                <textarea name="bangla_detail" class="form-control">{{old('bangla_detail')}}</textarea>
                                @if ($errors->has('bangla_detail'))
                                    <span class="text-danger">{{ $errors->first('bangla_detail') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English detail</label>
                                <textarea name="english_detail" class="form-control">{{old('english_detail')}}</textarea>
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
