@extends("view::" . getCurrentThemeId() . ".layouts.home")


@section('content')

    @include('view::'. getCurrentThemeId() .'.content-type.home')

@endsection
