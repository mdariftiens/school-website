@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

        @includeFirst([
                "view::" . getCurrentThemeId() . ".content-type.". $row->getTable() ."-detail",
                "view::" . getCurrentThemeId() . ".content-type.default-detail"
            ],['row'=>$row])

@endsection
