@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Management Committee - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Management Committee Create</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('management-committee.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('management-committee.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="english_name">English name <span>*</span></label>
                                <input type="text" class="form-control" name="english_name" id="english_name" placeholder="English Name" value="{{ old('english_name') }}">
                                @if ($errors->has('english_name'))
                                    <span class="text-danger">{{ $errors->first('english_name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_name">Bangla Name <span>*</span></label>
                                <input type="text" class="form-control" name="bangla_name" id="bangla_name" placeholder="Bangla Name" value="{{ old('bangla_name') }}">
                                @if ($errors->has('bangla_name'))
                                    <span class="text-danger">{{ $errors->first('bangla_name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="english_designation">English Designation <span>*</span></label>
                                <input type="text" class="form-control" name="english_designation" id="english_designation" placeholder="English Designation" value="{{ old('english_designation') }}">
                                @if ($errors->has('english_designation'))
                                    <span class="text-danger">{{ $errors->first('english_designation') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bangla_designation">Bangla Designation <span>*</span></label>
                                <input type="text" class="form-control" name="bangla_designation" id="bangla_designation" placeholder="Bangla Designation" value="{{ old('bangla_designation') }}">
                                @if ($errors->has('bangla_designation'))
                                    <span class="text-danger">{{ $errors->first('bangla_designation') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact_number">Contact Number <span>*</span></label>
                                <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}">
                                @if ($errors->has('contact_number'))
                                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority <span>*</span></label>
                                <input type="text" class="form-control" name="priority" id="priority" placeholder="priority" value="{{ old('priority') }}">
                                @if ($errors->has('priority'))
                                    <span class="text-danger">{{ $errors->first('priority') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="image" id="image" value="abc.png">
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
