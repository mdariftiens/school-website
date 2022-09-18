@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')



    @if( getCurrentRouteName() == 'home')

        <section class="home-main-content-with-slider-and-sidebar mt-10">
            <div class="container mx-auto">
                <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">
                    <div class="sm:w-full md:w-3/4 lg:w-1/1 xl:w-3/4 2xl:w-3/4 pr-6">


                        @include('view::'.getCurrentThemeId().'.template.slider.default')

                        <div class="about_school_area mt-5 font-lato">
                            <h1 class="text-2xl shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] py-2 px-2 mb-4">Welcome to SHAHEED
                                BIR UTTAM LT ANWAR GIRLS' COLLEGE (SAGC)</h1>
                            <div
                                class="about_school_content text-lg text-justify shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] px-2 py-3">
                                <p>Shaheed Bir Uttam Lt Anwar Girls’ College is one of the renowned institutions located
                                    inside the Dhaka Cantonment on an area of 5.24 acres. The institution started its
                                    journey in January 1957 under Cantonment Board as a primary school. In 1963 it had
                                    emerged as a full-fledged high school named as Cantonment Modern School.</p>
                                <p>Since its inception, the institution has been striving to impart quality education to the
                                    students. Being a girls' college, it has been a bench-mark on the advancement of female
                                    education in the country. Besides the glorious achievements in academic results, the
                                    students of this institution have been playing a commendable role in various
                                    co-curricular activities. This institution is advancing with the motto,(“O Lord, thrive
                                    my knowledge.”)</p>
                                <p>In 1966 first high school building was inaugurated by the then GOC of erstwhile East
                                    pakistan Major general Fazle Mukim Khan and at that time medium of instruction of the
                                    institution was English. After the liberation war, the institution was named after
                                    martyred army officer Lt. Anwar Hossain BU. Since then it was known as shaheed Anwar
                                    girls’ school. In 1974 it became completely a Bengali medium school and remained under
                                    cantonment Board till 1984, when it was brought under Army Headquarters a special
                                    committee was formed to take care of the school. In 1990 when the college section was
                                    opened the school came to be known as Shaheed Anwar girls’ college. In July 21, 1990 a
                                    principal joined here for the first time as head of the institution. In the beginning
                                    college section started its activities with humanities group only. Successively it
                                    opened science group in 1992 and commerce group in 1996. In 2001 for the first time an
                                    officer from Army Education Corps joined the institution as principal.</p>
                                <p>Now this institution is established as a full fledged intermediate college and known as
                                    shaheed Bir Uttam Lt. Anwar girls’ college.</p>
                            </div>
                        </div>
                    </div>

                    @include('view::'.getCurrentThemeId().'.template.sidebar.default')

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
                    {!! getSidebarWithWidgets('home-bottom-sidebar') !!}
                </div>
            </div>
        </section>


    @else
        <h2>Not Homepage</h2>
    @endif

@endsection
