

<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getContainerCssClasses() }} pr-6">
                @foreach($rows as $row)
                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-full text-center ml-2 mr-2">
                            <img src="{{ $row->featured_image_link }}" alt="{{$row->english_name}}" title="{{$row->english_name}}">
                        </div>

                        <div class="w-full ml-2">
                            <h1 class="text-black text-lg font-semibold">{{$row->bangla_title}}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->bangla_detail}}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->published_date}}</h1>
                            <a href="{{ route('news.show',$row->id) }}" class="text-[#23527c] text-lg">Read More</a>
                        </div>

                        <div class="w-full">
                            {!! $row->bangla_detail !!}
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
