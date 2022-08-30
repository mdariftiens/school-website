@extends('admin::layouts.commonMaster')

@section('layoutContent')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('backend.name') !!}
    </p>
@endsection
