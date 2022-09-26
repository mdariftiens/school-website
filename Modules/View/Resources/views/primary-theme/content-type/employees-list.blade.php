<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">
                @foreach($rows as $row)
                    <div class="notice_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-1/4 text-center ml-2 mr-2">
                            <img src="{{ $row->image }}" alt="">
                        </div>
                        <div class="w-3/4 ml-2">
                            <h1 class="text-black text-lg font-semibold">{{$row->english_name}}</h1>
                            <div>
                                <div class="w-full mt-5">
                                    {{ $row->category->english_name }} <br>
                                    {{ $row->department->english_name }}<br>
                                    {{ $row->designation->english_name }}<br>
                                    {{ $row->type->english_name }}<br>
                                    {{ $row->english_name }}<br>
                                    {{ $row->bangla_name }}
                                    {{ $row->employee_identification_number }}
                                    {{ $row->designation_id }}
                                    {{ $row->department_id }}
                                    {{ $row->english_description }}
                                    {{ $row->bangla_description }}
                                    {{ $row->employee_category_id }}
                                    {{ $row->employee_type }}
                                    {{ $row->contact_number }}
                                    {{ $row->email }}
                                    {{ $row->date_of_birth }}
                                    {{ $row->date_of_joining }}
                                    {{ $row->blood_group }}
                                    {{ $row->educational_qualification }}
                                    {{ $row->major_subject }}
                                </div>

                            </div>
                            <a href="{{ route('employees.show',$row->id) }}">Detail</a>
                        </div>
                    </div>
                @endforeach

                {{ $rows->links('pagination::tailwind') }}


            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
