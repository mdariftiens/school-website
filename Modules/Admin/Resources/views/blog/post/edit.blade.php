@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog Post - Update')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h5 class="card-title mb-0">Blog Post Update</h5>
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
                @include("admin::messages.message")
                <div class="card-body" style="box-shadow: none">
                    <form method="post" action="{{ route('blog.post.update',$row->id) }}">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Title</label>
                            <input type="text" class="form-control" name="english_title" placeholder="row english Title"
                                value="{{ $row->english_title }}">
                            @if ($errors->has('english_title'))
                            <span class="text-danger">{{ $errors->first('english_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Title</label>
                            <input type="text" class="form-control" name="bangla_title" placeholder="row Bangla Title"
                                value="{{ $row->bangla_title }}">
                            @if ($errors->has('bangla_title'))
                            <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status" id="status" value="{{ $row->status}}">
                                <option value="draft" {{$row->status === 'draft' ? 'selected' : ''}}>Draft</option>
                                <option value="published" {{$row->status === 'published' ? 'selected' : ''}}>Published
                                </option>

                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <select class="form-select" name="type" id="type">
                                <option value="post" {{$row->type === 'post' ? 'selected' : ''}}>Post</option>
                                <option value="page" {{$row->type === 'page' ? 'selected' : ''}}>Page</option>
                            </select>
                            @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="visibility">Visibility</label>
                            <select class="form-select" name="visibility" id="visibility">
                                <option value="public" {{$row->visibility === 'public' ? 'selected' : ''}}>Public
                                </option>
                                <option value="private" {{$row->visibility === 'private' ? 'selected' : ''}}>Private
                                </option>

                            </select>
                            @if ($errors->has('visibility'))
                            <span class="text-danger">{{ $errors->first('visibility') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Description</label>
                            <textarea name="bangla_description"
                                class="form-control">{{$row->bangla_description}}</textarea>
                            @if ($errors->has('bangla_description'))
                            <span class="text-danger">{{ $errors->first('bangla_description') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Description</label>
                            <textarea name="english_description"
                                class="form-control">{{$row->english_description}}</textarea>
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