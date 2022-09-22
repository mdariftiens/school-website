<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getContainerCssClasses() }} pr-6">

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
                             alt="{{$row->english_title}}"
                             title="{{$row->english_title}}"
                        >

                    </div>

                    <div class="w-3/4 ml-2">
                        <div class="w-full mb-5">
                            <b>Category: </b>{{ $row->category->english_name }}
                        </div>
                        <h1 class="text-black text-lg font-semibold">{{$row->english_title}}</h1>
                        <div class="w-full mt-5">
                            {!! $row->bangla_description !!}
                        </div>
                    </div>
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
