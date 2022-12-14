<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-1/4 text-center ml-2 mr-2">
                        <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                            {{ date('d', strtotime($row->published_date)) }}
                        </h2>
                        <h3 class="text-[coral] bg-[##F3F3F3] pt-1 pb-1">
                            {{ date('M', strtotime($row->published_date)) }}
                        </h3>

                        <h3 class="text-[coral] bg-[##F3F3F3] pt-1 pb-1">
                            Published Date: {{ $row->published_date }}
                        </h3>

                        <img src="{{ $row->featured_image_link }}"
                             alt="{{$row->{getLanguage().'_title'} }}"
                             title="{{$row->{getLanguage().'_title'} }}"
                        >

                    </div>

                    <div class="w-3/4 ml-2">
                        <div class="w-full mb-5">
                            <b>Category: </b>{{ $row->category->{getLanguage().'_name'} }}
                        </div>
                        <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_title'} }}</h1>
                        <div class="w-full mt-5">
                            {!! $row->{getLanguage().'_description'} !!}
                        </div>
                    </div>
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
