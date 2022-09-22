@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

    @if( getCurrentRouteName() == 'home')
        @include('view::primary-theme.home')
    @else

        @if(isset($rows) && $rows->count())
            @php $type = $rows->first()->getTable() @endphp
        @endif

        @includeFirst([
                "view::primary-theme.content-type.".$type."-list",
                "view::primary-theme.content-type.default-list"
            ],['rows'=>$rows])

    @endif

@endsection
