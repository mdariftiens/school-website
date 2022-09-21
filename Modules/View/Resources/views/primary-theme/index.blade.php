@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

    @dd($rows)
    @if( getCurrentRouteName() == 'home')
        @include('view::primary-theme.home')
    @else

        @include("view::primary-theme.content-type.default",['rows'=>$rows])
    @endif

@endsection
