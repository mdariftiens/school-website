@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

    <section class="home-main-content-with-slider-and-sidebar mt-10">
        <div class="container mx-auto">
            <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

                @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

                <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                    <div class="contactus_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-full ml-2 mr-2">
                            <h2 class="bg-bgColor text-center text-lg font-semibold text-white pt-1 pb-1 mb-5">
                                Contact Us
                            </h2>
                            <div class="grid grid-cols-2 gap-5 sm:grid-cols-1 md:grid-cols-2">
                                {!! getThemeSettingValue('_theme_setting_google_map') !!}
                                <div class="form_area">
                                    @if(session()->has('message'))
                                        <div class="bg-green-100 text-white-700 px-4 py-2 rounded relative mb-5">
                                            <span class="block sm:inline">{{ session()->get('message') }}</span>
                                        </div>
                                    @endif

                                    @if($errors->count())
                                        @foreach ($errors->all() as $error)
                                            <div class="bg-red-100 text-red-700 px-4 py-2 rounded relative mb-5">
                                                <span class="block sm:inline">{{ $error }}</span>
                                            </div>
                                        @endforeach
                                    @endif
                                    <form action="{{ route('contact-us.store') }}" method="post">
                                            @csrf

                                            <div class="mb-6">
                                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Name *</label>
                                                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required="" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-300 dark:text-white dark:border-gray-600">
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                                                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-300 dark:text-white dark:border-gray-600">
                                            </div>

                                            <div class="mb-3">
                                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400" for="phone">phone</label>
                                                <input type="text" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-300 dark:text-white dark:border-gray-600">
                                            </div>

                                            <div class="mb-3">
                                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400" for="subject">Subject *</label>
                                                <input type="text" id="subject" name="subject" placeholder="Subject" required value="{{ old('subject') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-300 dark:text-white dark:border-gray-600">
                                            </div>

                                            <div class="mb-3">
                                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400" for="message">Message</label> <br>
                                                <textarea name="message" id="message" cols="30" rows="10" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-300 dark:text-white dark:border-gray-600">{{ old('message') }}</textarea>
                                            </div>
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Submit</button>
                                        </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

            </div>
        </div>
    </section>

@endsection
