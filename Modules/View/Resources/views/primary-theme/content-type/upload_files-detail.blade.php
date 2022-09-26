<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">

                    <div class="w-4/4 ml-2">
                        <h1 class="text-black text-lg font-semibold">
                            {{ $row->bangla_title}} - {{ $row->category->bangla_name }}
                        </h1>
                        <div>
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

                                    <a target="_blank" href="{{ $media->url }}">Download</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
