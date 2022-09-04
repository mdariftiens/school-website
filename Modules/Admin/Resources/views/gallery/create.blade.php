@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Gallery - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Gallery Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('gallery.index') }}">
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
                        <form method="post" action="{{ route('gallery.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="english_title">English Title</label>
                                <input type="text" class="form-control" name="english_title" id="english_title" placeholder="File english name" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" id="bangla_title" placeholder="File bangla name" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="english_description">English Description</label>
                                <textarea class="form-control" placeholder="English description" name="english_description" rows="3" value="{{ old('english_description') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_description">Bangla Description</label>
                                <textarea class="form-control" placeholder="Bangla description" name="bangla_description" rows="3" value="{{ old('bangla_description') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="gallery_type">Gallery Type</label>
                                <select class="form-select" name="gallery_type" id="gallery_type">
                                    <option value="Image">Image</option>
                                    <option value="Video">Video</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority" placeholder="Priority" value="{{ old('priority') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="is_publish">Status</label>
                                <select class="form-select" name="is_publish" id="is_publish">
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
