@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Menu')

@section('content')
    <?php $currentUrl = url()->current(); ?>
        @if(isset($menus))
            <ul id="tree1">
                @foreach($menus as $menu)
                    @include('admin::menu.child',['menu' => $menu])
                @endforeach
            </ul>
        @endif
@endsection
