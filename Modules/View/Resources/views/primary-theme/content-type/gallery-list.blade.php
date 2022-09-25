

<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getContainerCssClasses() }} pr-6">
                @foreach($rows as $row)

                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">

                        <div class="w-4/4 ml-2">
                            <h1 class="text-black text-lg font-semibold">
                                {{ $row->bangla_title}} -  {{ $row->gallery_type }}
                            </h1>
                            <div>
                                <div class="w-full mt-5">
                                    {{ $row->bangla_description }}
                                </div>

                                @foreach($row->media as $media)
                                    <div class="w-full mt-5">
                                        {{ $row->bangla_title }}
                                        {{ $row->english_title }}
                                        {{ $row->bangla_alt_text }}
                                        {{ $row->english_alt_text }}
                                        {{ $row->filename }}
                                        {{ $row->mimetypes }}
                                        {{ $row->extension }}
                                        {{ $row->size }}
                                        {{ $row->disk_location }}
                                        {{ $row->url }}
                                    </div>
                                @endforeach

                            </div>
                            <a href="{{ route('gallery.show',$row->id) }}">Detail</a>
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
