<!--Third style of message-->
<div class="widget">
    <div class="border border-[#00ADEE] mt-3">
        <div class="message_content_area">
            @if($widgetWithWidgetDetail->header_show_hide == 1)
                <div
                    class="title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
                    <h3 class="text-[20px] font-semibold">{{ $widgetWithWidgetDetail->{getLanguage().'_title'} }}</h3>
                </div>
            @endif
            <div class="body border border-[#ddd] pt-3 pb-3 font-lato">
                <div class="grid grid-cols-3 items-center ml-2 mr-2">
                    <div class="mr-3">
                        <img class="w-full mx-auto border border-[#ddd] p-1"
                             src="https://sagc.edu.bd/wp-content/uploads/2022/03/Ch_Sir.jpg"
                             alt="image">
                    </div>
                    <div class="col-span-2">
                        <!-- <h5 class="text-[#337ab7] text-lg font-semibold">Message of Chairman </h5>
                        <h6 class="text-lg font-medium">Brig Gen Ferdous Hasan Salim</h6> -->
                        <p class="text-[16px] text-justify">ou can also use variant modifiers to
                            target media queries like responsive breakpoints, dark mode ...</p>
                        <div class="text-right">
                            <a href="#" class="font-semibold text-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!---message item-->
    <div class="border border-[#00ADEE] mt-3">
        <div class="message_content_area">
            <div
                class="notice_title text-titleColor flex justify-between shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-1 pb-1">
                <h3 class="text-[20px] font-semibold">Message of Chairman</h3>
            </div>
            <div class="message_content border border-[#ddd] pt-3 pb-3 font-lato">
                <div class="grid grid-cols-3 items-center ml-2 mr-2">
                    <div class="mr-3">
                        <img class="w-full mx-auto border border-[#ddd] p-1"
                             src="https://sagc.edu.bd/wp-content/uploads/2022/03/Ch_Sir.jpg"
                             alt="image">
                    </div>
                    <div class="col-span-2">
                        <!-- <h5 class="text-[#337ab7] text-lg font-semibold">Message of Chairman </h5>
                        <h6 class="text-lg font-medium">Brig Gen Ferdous Hasan Salim</h6> -->
                        <p class="text-[16px] text-justify">ou can also use variant modifiers to
                            target media queries like responsive breakpoints, dark mode ...</p>
                        <div class="text-right">
                            <a href="#" class="font-semibold text-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!---message item-->
</div>
