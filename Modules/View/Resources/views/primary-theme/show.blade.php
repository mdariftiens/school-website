@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

        @includeFirst([
                "view::primary-theme.content-type.". $row->getTable() ."-detail",
                "view::primary-theme.content-type.default-detail"
            ],['row'=>$row])

@endsection
