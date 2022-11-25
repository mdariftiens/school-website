<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">

                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-full text-center ml-2 mr-2">
                            <img src="{{ $row->image }}" alt="{{$row->{getLanguage().'_name'} }}" title="{{$row->{getLanguage().'_name'} }}">
                        </div>
                        <div class="w-full ml-2">
                            <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_title'} }}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_name'} }}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_designation'} }}</h1>
                        </div>
                        <div class="w-full">
                            {!! $row->{getLanguage().'_message'} !!}
                        </div>
                    </div>

                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
