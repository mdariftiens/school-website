<div class="widget achievement_list_area">
    @if($widgetWithWidgetDetail->header_show_hide == 1)
        <div
            class="title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
            <h3 class="text-[20px] font-semibold">{{ $widgetWithWidgetDetail->{getLanguage().'_title'} }}</h3>
        </div>
    @endif
    <div class="body achievement_list_content border border-[#ddd] pt-3 pb-3 h-80 overflow-auto">
        @foreach($data as $row)
        <div class="list grid grid-cols-11 items-center ml-2 mr-2 mb-3 border-b border-[#ddd] pb-3">
            <div class="col-span-2 mr-3">
                <a href="#">
                    <img class="w-full mx-auto border border-[#ddd] p-1"
                         src="{{ $row->featured_image_link }}"
                         alt="{{ $row->{getLanguage().'_title'} }}"
                         title="{{ $row->{getLanguage().'_title'} }}"
                    >
                    {{ $row->{getLanguage().'_title'} }}
                </a>
            </div>
            <div class="col-span-9">
                <a href="#">
                    <p class="text-lg font-medium">{{ $row->{getLanguage().'_title'} }}</p>
                </a>
            </div>
        </div><!--news list item-->
        @endforeach
    </div>
</div>
