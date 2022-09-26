@if(getThemeSettingValue('_theme_setting_homepage_slider_visibility')=='yes')

    <div class="slider_area">
        <div class="owl-carousel relative border border-[#2096cd] p-1">

            @foreach($slider->media as $media)
            <div
                class="bg-[url('{{ $media->url }}')] bg-cover bg-center min-h-[500px]">
            </div>
            @endforeach

        </div>
    </div>
@endif
