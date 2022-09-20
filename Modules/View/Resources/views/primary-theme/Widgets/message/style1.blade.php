@if($widgetWithWidgetDetail->use_theme_default_style=='no')
    <style>

    </style>
@endif

<!--Second style of message-->
<div class="message_area border border-[#00ADEE] font-lato mt-3">

    <div
        class="notice_title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
        <h3 class="text-[20px] font-semibold">{{ $widgetWithWidgetDetail->english_title }}</h3>
    </div>

    <div class="message_content_area">
        @foreach($data as $item)
        <div class="message_content border border-[#ddd] pt-3 pb-3 font-lato">
            <div class="grid grid-cols-3 items-center ml-2 mr-2">
                <div class="mr-3">
                    <img class="w-full mx-auto border border-[#ddd] p-1"
                         src="{{ $item->image }}"
                         alt="image">
                </div>
                <div class="col-span-2">
                    <h5 class="text-[#337ab7] text-lg font-semibold">{{ $item->english_name }} </h5>
                    <h6 class="text-lg font-medium">{{ $item->english_designation }}</h6>
                </div>
            </div>
        </div><!---message item-->
        @endforeach

    </div>

</div>
