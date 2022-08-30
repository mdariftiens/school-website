@extends('admin::layouts/contentNavbarLayout')

@section('title', 'Event category - list')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            @include("admin::messages.message")
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Event Category Create</h5>
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

                    @if(Session::has('success'))
                        <div class="alert alert-success" style="background-color: #71dd37">
                            <p style="color: #fff;margin: 0px">{{ Session::get('success') }}</p>
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif

                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('event.store') }}">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Name</label>
                                <input type="text" class="form-control" name="english_name" placeholder="Event category english name" value="{{ old('english_name') }}">
                                @if ($errors->has('english_name'))
                                    <span class="text-danger">{{ $errors->first('english_name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Name</label>
                                <input type="text" class="form-control" name="bangla_name" placeholder="Event category bangla name" value="{{ old('bangla_name') }}">
                                @if ($errors->has('bangla_name'))
                                    <span class="text-danger">{{ $errors->first('bangla_name') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
