<div class="widget achievement_list_area">
    <div
        class="title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-2 pb-2 mb-4">
        <h3 class="text-[25px] font-semibold">{{ $widgetWithWidgetDetail->{getLanguage().'_title'} }}</h3>
    </div>
    <div class="body achievement_list_content border border-[#ddd] pt-3 pb-3 h-80 overflow-auto">
        @foreach($data as $row)
        <div class="list grid grid-cols-1 items-center ml-2 mr-2 mb-3 border-b border-[#ddd] border-dashed pb-3">
            <div>
                <a href="#">
                    <span class="text-[17px] bg-[#FF7F50] text-[#fff] px-6 py-2 mb-2 inline-block font-semibold shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] rounded-md">
                        {{ $row->{getLanguage().'_title'} }}
                    </span>
                    <p class="text-lg font-medium">
                        {{ $row->{getLanguage().'_title'} }}
                    </p>
                </a>
            </div>
        </div><!--news list item-->
        @endforeach
    </div>
</div>
