<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">

                    <div class="w-4/4 ml-2">
                        <h1 class="text-black text-lg font-semibold">
                            {{ $row->{getLanguage().'_title'} }} - {{ $row->category->{getLanguage().'_name'} }}
                        </h1>
                        <div>
                            @foreach($row->media as $media)
                                <div class="w-full mt-5">
                                    {{ $row->{getLanguage().'_title'} }}
                                    {{ $row->{getLanguage().'_title'} }}
                                    {{ $row->{getLanguage().'_alt_text'} }}
                                    {{ $row->{getLanguage().'_alt_text'} }}
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
