@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Event category - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Event Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('event.index') }}">
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
                        <form method="post" action="{{ route('event.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="event-category">Category</label>
                                <select class="form-select" name="category_id" id="event-category">
                                    <option value="">Select Category</option>
                                    @foreach($EventCategorylist as $value)
                                        <option value="{{ $value->id }}">{{ $value->english_name }} | {{ $value->bangla_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Title</label>
                                <input type="text" class="form-control" name="english_title" placeholder="Event english name" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" placeholder="Event bangla name" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">English Description</label>
                                <textarea class="form-control" placeholder="English description" name="english_description" rows="3" value="{{ old('english_description') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">Bangla Description</label>
                                <textarea class="form-control" placeholder="Bangla description" name="bangla_description" rows="3" value="{{ old('bangla_description') }}"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English venue</label>
                                <input type="text" class="form-control" name="english_venue" placeholder="English venue" value="{{ old('english_venue') }}">
                                @if ($errors->has('english_venue'))
                                    <span class="text-danger">{{ $errors->first('english_venue') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla venue</label>
                                <input type="text" class="form-control" name="bangla_venue" placeholder="Bangla venue" value="{{ old('bangla_venue') }}">
                                @if ($errors->has('bangla_venue'))
                                    <span class="text-danger">{{ $errors->first('bangla_venue') }}</span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-name">From datetime *</label>
                                        <input class="form-control" type="datetime-local" name="from_datetime" value="{{ old('from_datetime') }}">
                                        @if ($errors->has('from_datetime'))
                                            <span class="text-danger">{{ $errors->first('from_datetime') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-name">To datetime</label>
                                        <input class="form-control" type="datetime-local" name="to_datetime" value="{{ old('to_datetime') }}">
                                        @if ($errors->has('to_datetime'))
                                            <span class="text-danger">{{ $errors->first('to_datetime') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="event-category">Status</label>
                                <select class="form-select" name="is_published" id="is_publish">
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
