<li class="text-lg">
    <a href="#">{{ $menu->label  }}</a>

@if($menu->childs->count() > 0)
    <ul>
        @foreach($menu->childs as $child)
            @include('view::primary-theme.template.menu.child',['menu' => $child])
        @endforeach
    </ul>
@endif
</li>
