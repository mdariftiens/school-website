<section class="header_menu_section sm:hidden lg:block xl:block 2xl:block bg-bgColor mt-3">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 items-center">
            @if(getThemeSettingValue('_theme_setting_display_menu_logo') == 'yes')
                <img class=" col-span-1 sm:w-1/1 md:w-3/4 lg:w-3/4 xl:w-3/4 2xl:w-3/4 mr-4"
                     src="{{ getThemeSettingValue('_theme_setting_menu_logo_url') }}" alt="sagcTopLogo">
            @endif
                <nav class="col-span-11">
                @if(isset($menus))
                    <ul class="dropdown flex justify-between items-center text-lg">
                        @foreach($menus as $menu)
                            @include('view::'.getCurrentThemeId().'.template.menu.child',['menu' => $menu])
                        @endforeach
                    </ul>
                @endif
            </nav>
        </div>
    </div>
</section><!--header logo layout three-->
