@if(getCurrentRouteName() == 'home')
    @extends("view::" . getCurrentThemeId() . ".layouts.home")
@else
    @extends("view::" . getCurrentThemeId() . ".layouts.master")
@endif


@section('content')

    @if( getCurrentRouteName() == 'home')
        @include('view::primary-theme.content-type.home')
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
