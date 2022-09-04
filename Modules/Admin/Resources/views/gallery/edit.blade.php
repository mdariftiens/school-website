@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Gallery Upload - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Gallery Update</h5>
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
                        <form method="post" action="{{ route('gallery.update', $row->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="english_title">English Title</label>
                                <input type="text" class="form-control" name="english_title" id="english_title" placeholder="Gallery english name" value="{{ $row->english_title }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" id="bangla_title" placeholder="Gallery bangla name" value="{{ $row->bangla_title }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="english_description">English Description</label>
                                <textarea class="form-control" placeholder="English description" id="english_description" name="english_description" rows="3">{{ $row->english_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_description">Bangla Description</label>
                                <textarea class="form-control" placeholder="Bangla description" id="bangla_description" name="bangla_description" rows="3">{{ $row->english_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="gallery_type">Gallery Type</label>
                                <select class="form-select" name="gallery_type" id="gallery_type">
                                    <option <?= ($row->gallery_type == 'Image')? 'selected' : '' ?> value="Image">Image</option>
                                    <option <?= ($row->gallery_type == 'Video')? 'selected' : '' ?> value="Video">Video</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority" placeholder="Priority" value="{{ $row->priority }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="is_publish">Status</label>
                                <select class="form-select" name="is_publish" id="is_publish">
                                    <option <?= ($row->is_publish == '0')? 'selected' : '' ?> value="0">Draft</option>
                                    <option <?= ($row->is_publish == '1')? 'selected' : '' ?> value="1">Publish</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
