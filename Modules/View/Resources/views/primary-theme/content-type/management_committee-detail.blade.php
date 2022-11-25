<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-1/4 text-center ml-2 mr-2">
                        <img src="{{ $row->image }}"
                             alt="{{$row->{getLanguage().'_name'} }}"
                             title="{{$row->{getLanguage().'_name'} }}"
                        >


                    </div>

                    <div class="w-3/4 ml-2">

                        <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                            {{ $row->{getLanguage().'_name'} }}
                        </h2>
                        <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_title'} }}</h1>
                        <div class="w-full mt-5">
                            {{ $row->contact_number}}
                            {{ $row->email}}
                            <br>
                            {{ $row->{getLanguage().'_designation'} }}
                        </div>
                    </div>
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
