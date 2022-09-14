@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Homepage - Settings ')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Homepage - Settings</h5>
                    </div>
                </div>

                <div class="card mb-4">
                    @include("admin::messages.message")
                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('settings.store') }}">
                            {{ csrf_field() }}

                            @include("admin::settings." . $type)

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
@endsection
