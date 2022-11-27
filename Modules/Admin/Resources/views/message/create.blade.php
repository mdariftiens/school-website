@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Message - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Message Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('message.index') }}">
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
                        <form method="post" action="{{ route('message.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="english_title">English Title</label>
                                <input type="text" class="form-control" name="english_title" id="english_title" placeholder="English Title" value="{{ old('english_title') }}">
                                @if ($errors->has('english_title'))
                                    <span class="text-danger">{{ $errors->first('english_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Title</label>
                                <input type="text" class="form-control" name="bangla_title" id="bangla_title" placeholder="Bangla Title" value="{{ old('bangla_title') }}">
                                @if ($errors->has('bangla_title'))
                                    <span class="text-danger">{{ $errors->first('bangla_title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="english_name">English Name</label>
                                <input type="text" class="form-control" name="english_name" id="english_name" placeholder="English Name" value="{{ old('english_name') }}">
                                @if ($errors->has('english_name'))
                                    <span class="text-danger">{{ $errors->first('english_name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_title">Bangla Name</label>
                                <input type="text" class="form-control" name="bangla_name" id="bangla_name" placeholder="Bangla Name" value="{{ old('bangla_name') }}">
                                @if ($errors->has('bangla_name'))
                                    <span class="text-danger">{{ $errors->first('bangla_name') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="english_designation">English Designation</label>
                                <input class="form-control" placeholder="English Designation" id="english_designation" name="english_designation"  value="{{ old('english_designation') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_designation">Bangla Designation</label>
                                <input class="form-control" placeholder="Bangla Designation" name="bangla_designation" value="{{ old('bangla_designation') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="english_message">English Message</label>
                                <textarea class="form-control" placeholder="English Message" name="english_message" rows="3" value="{{ old('english_message') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_message">Bangla Message</label>
                                <textarea class="form-control" placeholder="Bangla Message" name="bangla_message" rows="3" value="{{ old('bangla_message') }}"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority" placeholder="Priority" value="{{ old('priority') }}">
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
    CKEDITOR.replace( 'english_message',{height: 500} );
    CKEDITOR.replace( 'bangla_message',{height: 500} );
</script>
@endsection
