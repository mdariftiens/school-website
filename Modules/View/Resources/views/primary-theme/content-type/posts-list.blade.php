<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">
                @dd($rows)
                @foreach($rows as $row)

                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-1/4 text-center ml-2 mr-2">
                            <img src="{{ $row->featured_image_link }}" alt="{{ $row->{getLanguage().'_title'} }}">
                        </div>
                        <div class="w-3/4 ml-2">
                            <a href="{{ route('blog.show', $row->slug) }}">
                                <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                                    {{ $row->{getLanguage().'_title'}  }}
                                </h2>
                            </a>
                            <br>
                            <br>
                            {{__('message.Category')}}:
                            @forelse($row->categories as $cat)
                                <a href="#"> {{ $cat->{getLanguage().'_title'} }}</a>
                            @empty

                            @endforelse
                            <br>
                            <br>
                            {{ $row->{getLanguage().'_description'} }}

                            <a class="text-[#23527c] text-lg" href="{{ route('blog.show', $row->slug) }}">
                                {{ __("message.read more") }}
                            </a>
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
