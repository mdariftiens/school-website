@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')



    @if( getCurrentRouteName() == 'home')

        <section class="home-main-content-with-slider-and-sidebar mt-10">
            <div class="container mx-auto">
                <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

                    @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

                    <div class=" {{getContainerCssClasses() }} pr-6">
                        @if(getThemeSettingValue('_theme_setting_homepage_slider_visibility')=='yes')
                            @include('view::'.getCurrentThemeId().'.template.slider.default')
                        @endif

                        @if(getThemeSettingValue('_theme_setting_homepage_about_school_visibility') == 'yes')
                            <div class="about_school_area mt-5 font-lato">
                            <h1 class="text-2xl shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] py-2 px-2 mb-4">
                                Welcome to {{ getThemeSettingValue('_theme_setting_homepage_about_school_title') }}
                            </h1>
                            <div
                                class="about_school_content text-lg text-justify shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] px-2 py-3">
                                {!! getThemeSettingValue('_theme_setting_homepage_about_school_detail') !!}
                            </div>
                        </div>
                        @endif

                    </div>

                    @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

                </div>
            </div>
        </section>

        <!-- Home Footer top sidebar-->
        {!! getSidebarWithWidgets('home-footer-top-sidebar') !!}

        <!-- Home Footer middle sidebar-->
        {!! getSidebarWithWidgets('home-footer-middle-sidebar') !!}


        <section class="news_achievement_event_section mt-4">
            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-4">
                    {!! getSidebarWithWidgets('home-footer-bottom-sidebar') !!}
                </div>
            </div>
        </section>


    @else
        <h2>Not Homepage</h2>
    @endif

@endsection
