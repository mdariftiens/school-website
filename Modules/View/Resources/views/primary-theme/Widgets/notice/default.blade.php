
@if($widgetWithWidgetDetail->use_theme_default_style=='no')
    <style>

    </style>
@endif

<div class="notice_area notice_widget_{{$widgetWithWidgetDetail->id}} border border-[#00ADEE] font-lato">

    <div
        class="notice_title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
        <h3 class="text-2xl font-semibold">{{ $widgetWithWidgetDetail->english_title }}</h3>
        <a href="">View All</a>
    </div>

    @foreach($data as $item)
    <div
        class="lates_notice text-1xl font-medium pt-2 pb-2 text-center shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] mt-3 mb-5 text-titleColor">
        <a href="#">{{ $item->english_title }}</a>
    </div>

    <div class="notice_content_area">
        <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
            <div class="w-1/4 text-center ml-2 mr-2">
                <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">{{ date("d", strtotime($item->published_datetime)) }}</h2>
                <h3 class="text-[coral] bg-[##F3F3F3] pt-1 pb-1">{{ date("M", strtotime($item->published_datetime)) }}</h3>
            </div>
            <div class="w-3/4 ml-2">
                <h1 class="text-black text-lg font-semibold">{{ $item->english_title }}</h1>
                <a href="#" class="text-[#23527c] text-lg">Read More</a>
            </div>
        </div><!---notice item-->
    </div>
    @endforeach
</div><!--notice widged one-->
