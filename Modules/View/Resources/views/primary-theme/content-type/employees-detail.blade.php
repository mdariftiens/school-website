<section class="home-main-content-with-slider-and-sidebar mt-10">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

            @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

            <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                <div class="{{$row->getTable()}}_content flex border border-[#ddd] pt-2 pb-2">
                    <div class="w-1/4 text-center ml-2 mr-2">
                        <img src="{{ $row->image }}"
                             alt="{{$row->{getLanguage().'_name'} }}"
                             title="{{$row->{getLanguage().'_name'} }}"
                        >
                    </div>

                    <div class="w-3/4 ml-2">

                        <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                            {{ $row->{getLanguage().'_name'} }}
                        </h2>
                        <h1 class="text-black text-lg font-semibold">
                            {{$row->{getLanguage().'_title'} }}
                        </h1>
                        <div class="w-full mt-5">
                            {{ $row->category->{getLanguage().'_name'} }} <br>
                            {{ $row->department->{getLanguage().'_name'} }}<br>
                            {{ $row->designation->{getLanguage().'_name'} }}<br>
                            {{ $row->type->{getLanguage().'_name'} }}<br>

                            {{ $row->{getLanguage().'_name'} }}
                            {{ $row->{getLanguage().'_name'} }}
                            {{ $row->employee_identification_number }}
                            {{ $row->designation_id }}
                            {{ $row->department_id }}
                            {{ $row->{getLanguage().'_description'} }}
                            {{ $row->{getLanguage().'_description'} }}
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
