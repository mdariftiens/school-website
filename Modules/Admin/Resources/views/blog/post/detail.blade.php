@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Blog Post - Detail')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h5 class="card-title mb-0">Blog Post Details</h5>
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
                <div class="card-body" style="box-shadow: none">
                    <form method="row" action="#">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Title</label>
                            <input type="text" class="form-control" name="english_title"
                                value="{{ $row->english_title }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Title</label>
                            <input type="text" class="form-control" name="bangla_title" value="{{ $row->bangla_title }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="row Slug"
                                value="{{ $row->slug }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="visibility">Status</label>
                            <input type="text" class="form-control" value="{{ $row->status }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="visibility">Type</label>
                            <input type="text" class="form-control" value="{{ $row->type }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="visibility">Visibility</label>
                            <input type="text" class="form-control" value="{{ $row->visibility }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">Bangla Description</label>
                            <textarea name="bangla_description" class="form-control"
                                readonly>{{ $row->bangla_description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-name">English Description</label>
                            <textarea name="english_description" class="form-control"
                                readonly>{{ $row->english_description }}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection