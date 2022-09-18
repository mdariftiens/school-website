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

        <section class="event_section mt-10">
            <div class="container mx-auto">
                <div
                    class="title text-center text-4xl font-semibold font-lato shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-2 pb-2 mb-6">
                    <h2>News</h2>
                </div>

                <div
                    class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 text-center gap-4">
                    <div
                        class="card_item border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="event_section mt-10">
            <div class="container mx-auto">
                <div
                    class="title text-center text-4xl font-semibold font-lato shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-2 pb-2 mb-6">
                    <h2>Our Achievements</h2>
                </div>
                <div
                    class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 text-center gap-4">
                    <div
                        class="card_item basis-1/4 border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item basis-1/4 border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item basis-1/4 border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                    <div
                        class="card_item basis-1/4 border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                        <a href="#">
                            <img class="border border-[#ddd] p-1"
                                 src="{{ asset('images/frontend-themes/primary/event_demo_img.jpg') }}" alt="img">
                            <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">Shaheed Bir Uttam
                                Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka
                                Cantonment on an area of 5.24 acres</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
