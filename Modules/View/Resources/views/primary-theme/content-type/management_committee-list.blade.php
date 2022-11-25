<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">
                @foreach($rows as $row)
                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-1/4 text-center ml-2 mr-2">
                            <img src="{{ $row->image }}" alt="">
                        </div>
                        <div class="w-3/4 ml-2">
                            <h1 class="text-black text-lg font-semibold">{{$row->{getLanguage().'_name'} }}</h1>
                            <div>
                                {{ $row->{getLanguage().'_name'} }}
                                {{ $row->{getLanguage().'_designation'} }}
                                {{ $row->{getLanguage().'_name'} }}
                                {{ $row->{getLanguage().'_designation'} }}
                                {{ $row->contact_number}}
                                {{ $row->email}}

                            </div>
                            <a href="{{ route('management-committees.show',$row->id) }}">Detail</a>
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
