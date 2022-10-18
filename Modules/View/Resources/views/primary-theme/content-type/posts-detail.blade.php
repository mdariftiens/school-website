<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-full text-center ml-2 mr-2">
                        <img src="{{ $row->featured_image_link }}" alt="{{ $row->{getLanguage().'_title'} }}">
                    </div>

                    <div class="w-full">
                        <div class="mb-5">
                            <br>
                            <br>
                            {{__('message.Category')}}:
                            @forelse($row->categories as $cat)
                                <a href="#"> {{ $cat->{getLanguage().'_title'} }}</a>
                            @empty

                            @endforelse
                            <br>
                            <br>
                        </div>
                        <h1 class="text-black text-lg font-semibold">
                            {{$row->{getLanguage().'_title'} }}
                        </h1>
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
