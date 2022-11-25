@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

    @if( getCurrentRouteName() == 'home')
        @include('view::' . getCurrentThemeId() . '.content-type.home')
    @else

        @if(isset($rows) && $rows->count())
            @php $type = $rows->first()->getTable() @endphp
        @endif

        @includeFirst([
                "view::' . getCurrentThemeId() . '.content-type.".$type."-list",
                "view::' . getCurrentThemeId() . '.content-type.default-list"
            ],['rows'=>$rows])

    @endif

@endsection
