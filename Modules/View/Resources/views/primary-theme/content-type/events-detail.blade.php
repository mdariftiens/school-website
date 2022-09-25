<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">

                    <div class="w-4/4 ml-2">

                        <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                            {{ $row->english_name }}
                        </h2>
                        <h1 class="text-black text-lg font-semibold">
                            {{$row->english_title}}
                        </h1>
                        <div class="w-full mt-5">
                            {{ $row->category->bangla_name }} <br>
                            {{ $row->bangla_title }}
                            {{ $row->english_title }}
                            {{ $row->bangla_description }}
                            {{ $row->english_description }}
                            {{ $row->bangla_venue }}
                            {{ $row->english_venue }}
                            {{ $row->from_datetime }}
                            {{ $row->to_datetime }}
                        </div>
                    </div>
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
