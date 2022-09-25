<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-1/4 text-center ml-2 mr-2">
                        <img src="{{ $row->image }}"
                             alt="{{$row->english_name}}"
                             title="{{$row->english_name}}"
                        >
                    </div>

                    <div class="w-3/4 ml-2">

                        <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                            {{ $row->english_name }}
                        </h2>
                        <h1 class="text-black text-lg font-semibold">
                            {{$row->english_title}}
                        </h1>
                        <div class="w-full mt-5">
                            {{ $row->category->english_name }} <br>
                            {{ $row->department->english_name }}<br>
                            {{ $row->designation->english_name }}<br>
                            {{ $row->type->english_name }}<br>

                            {{ $row->english_name }}
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
                </div>

            </div>

            @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

        </div>
    </div>
</section>
