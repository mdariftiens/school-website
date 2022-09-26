<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">
                @foreach($rows as $row)
                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-full text-center ml-2 mr-2">
                            <img src="{{ $row->image }}" alt="{{$row->english_name}}" title="{{$row->english_name}}">
                        </div>
                        <div class="w-full ml-2">
                            <h1 class="text-black text-lg font-semibold">{{$row->english_title}}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->english_name}}</h1>
                            <h1 class="text-black text-lg font-semibold">{{$row->english_designation}}</h1>
                            <a href="{{ route('messages.show',$row->id) }}" class="text-[#23527c] text-lg">Read More</a>
                        </div>
                        <div class="w-full">
                            {!! $row->english_message !!}
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
