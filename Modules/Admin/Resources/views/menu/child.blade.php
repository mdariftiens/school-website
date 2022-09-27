<li>{{ $menu->label  }} </li>

@if($menu->childs->count() > 0)
    <ul>
        @foreach($menu->childs as $child)
            @include('admin::menu.child',['menu' => $child])
        @endforeach
    </ul>
@endif
