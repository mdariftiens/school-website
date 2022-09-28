<section class="header_logo_area mt-3">
    <div class="container mx-auto">
        <div class="flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row justify-between items-center">
            <div
                class="logo flex sm:flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row items-center">
                <img class="sm:w-1/3 md:w-1/12 lg:w-1/12 xl:w-1/12 2xl:w-1/12 mr-4"
                     src="{{ getThemeSettingValue('_theme_setting_menu_logo_url') }}" alt="{{ getThemeSettingValue('_theme_setting_school_name') }}">
                <div class="school_name">
                    <h1 class="font-middle text-3xl font-medium text-[#3B5998]">{{ getThemeSettingValue('_theme_setting_school_name') }}</h1>
                    <p class="font-medium text-lg text-red-">{{ getThemeSettingValue('_theme_setting_school_code_eiin') }}</p>
                </div>
            </div>
            <div class="">
                {!! getSidebarWithWidgets('header-top-right-sidebar') !!}
            </div>
        </div>
    </div>
</section><!--header logo layout one-->
