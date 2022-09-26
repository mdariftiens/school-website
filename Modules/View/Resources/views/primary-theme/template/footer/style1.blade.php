<section class="footer_section bg-bgColor pt-10 pb-10 mt-10">
    <div class="container mx-auto">
        <div
            class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 gap-10 text-white font-lato">
            <div class="footer_iterm col-span-1">
                {!! getSidebarWithWidgets('footer-left-sidebar') !!}
            </div>
            <div class="footer_iterm col-span-2">
                <div class="map_address">

                    {!! getThemeSettingValue('_theme_setting_google_map') !!}

                </div>
            </div>
            <div class="footer_iterm col-span-1">
                <h4 class="text-2xl font-medium mb-4">Download App:</h4>
                <div class="grid grid-cols-2">
                    <a href="#"><img class="mb-3" src="{{ asset('images/frontend-themes/primary/mobile.png') }}"
                                     alt="AppLogo"></a>
                    <a href="#"><img src="{{ asset('images/frontend-themes/primary/iphone.png') }}"
                                     alt="AppLogo"></a>
                </div>
                <h4 class="text-2xl font-medium mt-4 mb-3">Powered By:</h4>
                <a href="#"><img class="mb-3 w-3/4"
                                 src="{{ asset('images/frontend-themes/primary/ClassTune-New-Logo.png') }}"
                                 alt="AppLogo"></a>
            </div>
        </div>
    </div>
</section><!--footer two-->
