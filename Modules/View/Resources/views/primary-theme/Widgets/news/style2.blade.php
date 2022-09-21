<section class="event_section mt-10">
    <div class="container mx-auto">
        <div class="title text-center text-4xl font-semibold font-lato shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] items-center pl-2 pr-2 pt-2 pb-2 mb-6">
            <h2>{{$widgetWithWidgetDetail->bangla_title}}</h2>
        </div>


        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 text-center gap-4">
            @foreach($data as $row)
            <div class="card_item border border-[#ddd] p-3 shadow-[0px_2px_2px_2px_rgba(0,0,0,0.1)] hover:shadow-[0px_5px_5px_5px_rgba(0,0,0,0.1)] delay-150 duration-300">
                <a href="#">
                    <img class="border border-[#ddd] p-1"
                         src="{{$row->featured_image_link}}" title="{{ $row->bangla_title }}" alt="{{ $row->bangla_title }}">
                    <h4 class="font-lato text-lg font-medium text-[#5899B7] mt-4 leading-[25px]">
                        {{ $row->bangla_title }}
                    </h4>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
