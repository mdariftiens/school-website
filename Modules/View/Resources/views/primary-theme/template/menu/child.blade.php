<li>
    <a href="{{ $menu->link }}">{{ $menu->{getLanguage().'_label'}   }} <?= ($menu->childs->count() > 0 and $menu->parent == 0 ) ? '<i class="fa fa-arrow-down" style="font-size: 14px"></i>' : ''; ?> <?= ($menu->childs->count() > 0 and $menu->parent != 0 ) ? '<i class="fa fa-arrow-right" style="font-size: 14px"></i>' : ''; ?> </a>

@if($menu->childs->count() > 0)
    <ul>
        @foreach($menu->childs as $child)
            @include('view::primary-theme.template.menu.child',['menu' => $child])
        @endforeach
    </ul>
@endif
</li>
