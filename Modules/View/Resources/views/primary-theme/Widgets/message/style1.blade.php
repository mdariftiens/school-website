@if($widgetWithWidgetDetail->use_theme_default_style=='no')
    <style>

    </style>
@endif

<!--Second style of message-->
<div class="widget border border-[#00ADEE] mt-3">

    @if($widgetWithWidgetDetail->header_show_hide == 1)
        <div
            class="title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
            <h3 class="text-[20px] font-semibold">{{ $widgetWithWidgetDetail->{getLanguage().'_title'} }}</h3>
        </div>
    @endif
    <div class="body">
        @foreach($data as $item)
        <div class="list border border-[#ddd] pt-3 pb-3 font-lato">
            <div class="grid grid-cols-3 items-center ml-2 mr-2">
                <div class="mr-3">
                    <img class="w-full mx-auto border border-[#ddd] p-1"
                         src="{{ $item->image }}"
                         alt="image">
                </div>
                <div class="title col-span-2">
                    <h5 class="text-[#337ab7] text-lg font-semibold">{{ $item->{getLanguage().'_name'} }} </h5>
                    <h6 class="text-lg font-medium">{{ $item->{getLanguage().'_designation'} }}</h6>
                </div>
            </div>
        </div><!---message item-->
        @endforeach

    </div>

</div>
