@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog Post - New')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h5 class="card-title mb-0">Blog Post Create</h5>
                </div>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons">
                        <a class="dt-button create-new btn btn-info" href="{{ route('blog.post.index') }}">
                            <span><i class="bx bx-list-ol me-sm-2"></i>
                                <span class="d-none d-sm-inline-block">List</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mb-4">

                @include('admin::messages.message')
                @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                 @endif

                <div class="card-body" style="box-shadow: none">
                    <form method="post" action="{{ route('blog.post.store') }}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Title</label>
                            <input type="text" class="form-control" name="english_title"
                                placeholder="Post english Title" value="{{ old('english_title') }}">
                            @if ($errors->has('english_title'))
                            <span class="text-danger">{{ $errors->first('english_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Title</label>
                            <input type="text" class="form-control" name="bangla_title" placeholder="Post Bangla Title"
                                value="{{ old('bangla_title') }}">
                            @if ($errors->has('bangla_title'))
                            <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option value="draft" selected>Draft</option>
                                <option value="published">Published</option>

                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <select class="form-select" name="type" id="type">
                                <option value="post" selected>Post</option>
                                <option value="page">Page</option>
                            </select>
                            @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="visibility">Visibility</label>
                            <select class="form-select" name="visibility" id="visibility">
                                <option value="public" selected>Public</option>
                                <option value="private">Private</option>
                            </select>
                            @if ($errors->has('visibility'))
                            <span class="text-danger">{{ $errors->first('visibility') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="comments">Comments</label>
                            <select class="form-select" name="comment" >
                                <option value="yes" selected>Yes</option>
                                <option value="no">No</option>
                            </select>
                            @if ($errors->has('visibility'))
                            <span class="text-danger">{{ $errors->first('visibility') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="select2Multiple">Categories</label>
                            <select class="select2 form-control" name="category[]" multiple="multiple"
                              id="select2Multiple">
                              @foreach($list as $value)              
                              <option value="{{$value->id}}">{{$value->english_title}}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Description</label>
                            <textarea name="bangla_description"
                                class="form-control">{{ old('bangla_description') }}</textarea>
                            @if ($errors->has('bangla_description'))
                            <span class="text-danger">{{ $errors->first('bangla_description') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Description</label>
                            <textarea name="english_description"
                                class="form-control">{{ old('english_description') }}</textarea>
                            @if ($errors->has('english_description'))
                            <span class="text-danger">{{ $errors->first('english_description') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('page-script')
     
    <script>
        CKEDITOR.replace( 'english_description',{height: 500} );
        CKEDITOR.replace( 'bangla_description',{height: 500} );
   
        $(document).ready(function() {            
            $('.select2').select2({
                placeholder: "Select Category",
                allowClear: true
            });

        });

    </script>
    @endsection