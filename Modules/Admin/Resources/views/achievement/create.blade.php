@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Achievement - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Achievement Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('achievements.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('achievements.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="english_title">English title <span>*</span></label>
                                <input type="text" class="form-control" name="english_title" id="english_title" placeholder="Bangla Name" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Title <span>*</span></label>
                                <input type="text" class="form-control" name="bangla_title" id="bangla_title" placeholder="English Title" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">English Description <span>*</span></label>
                                <textarea class="form-control" placeholder="English description" name="english_detail" rows="3" value="{{ old('english_detail') }}"></textarea>
                                @if ($errors->has('english_detail'))
                                    <span class="text-danger">{{ $errors->first('english_detail') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">Bangla Description <span>*</span></label>
                                <textarea class="form-control" placeholder="Bangla description" name="bangla_detail" rows="3" value="{{ old('bangla_detail') }}"></textarea>
                                @if ($errors->has('bangla_detail'))
                                    <span class="text-danger">{{ $errors->first('bangla_detail') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Published Date *</label>
                                <input class="form-control" type="date" name="published_date" value="{{ old('published_date') }}">
                                @if ($errors->has('published_date'))
                                    <span class="text-danger">{{ $errors->first('published_date') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="featured_image_link" id="featured_image_link" value="abc.png">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
