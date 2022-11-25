<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">
                <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-full text-center ml-2 mr-2">
                        <img src="{{ $row->featured_image_link }}" alt="{{$row->{getLanguage().'_name'} }}"
                             title="{{$row->{getLanguage().'_name'} }}">

                        <h1 class="text-black mt-5 mb-5 text-lg font-semibold">{{$row->{getLanguage().'_title'} }}</h1>
                        <h1 class="text-black mt-5 mb-5 text-lg font-semibold">{{$row->{getLanguage().'_detail'} }}</h1>
                        <h1 class="text-black mt-5 mb-5 text-lg font-semibold">{{$row->published_date}}</h1>

                        {!! $row->{getLanguage().'_detail'} !!}
                    </div>
                </div>
            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
