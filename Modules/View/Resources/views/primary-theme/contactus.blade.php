@extends("view::" . getCurrentThemeId() . ".layouts.master")

@section('content')

    <section class="home-main-content-with-slider-and-sidebar mt-10">
        <div class="container mx-auto">
            <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row">

                @include('view::'.getCurrentThemeId().'.template.sidebar.left.default')

                <div class=" {{getGeneralPageContainerCssClasses() }} pr-6">

                    <div class="contactus_content flex border border-[#ddd] pt-2 pb-2">
                        <div class="w-full text-center ml-2 mr-2">
                            <h2 class="bg-bgColor text-lg font-semibold text-white pt-1 pb-1">
                                Contact Us
                            </h2>
                            @if(session()->has('message'))
                                {{ session()->get('message') }}
                            @endif

                            @if($errors->count())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif

                            <form action="{{ route('contact-us.store') }}" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="phone">phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="subject">Subject *</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required value="{{ old('subject') }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="message">Message</label> <br>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" required>{{ old('message') }}</textarea>
                                </div>
                                <button class="color">Submit</button>
                            </form>
                        </div>

                    </div>

                </div>

                @include('view::'.getCurrentThemeId().'.template.sidebar.right.default')

            </div>
        </div>
    </section>

@endsection
