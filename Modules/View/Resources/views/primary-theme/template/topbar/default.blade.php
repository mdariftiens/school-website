<section class="header_top_area bg-bgColor pt-1 pb-1">
    <div class="container mx-auto">
        <div
            class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 text-center justify-between text-white font-normal">

            <div
                class="flex xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row 2xl:flex-row sm:items-center bg-color-clifford">
                <div class="flex mr-5 align-middle">
                    <i class="fa fa-phone mt-1 mr-2"></i>
                    <p><strong>Phone</strong> {{ getThemeSettingValue('_theme_setting_top_bar_phone_number') }}</p>
                </div>

                <div class="flex text-base">
                    <i class="fa fa-envelope mt-1 mr-2"></i>
                    <p>{{ getThemeSettingValue('_theme_setting_top_bar_email') }}</p>
                </div>
            </div>

            <div class="grid grid-cols-4 font-semibold items-center">
                <p class="col-span-3">{{ getThemeSettingValue('_theme_setting_top_bar_rightside_content') }}</p>
                <div class="grid grid-cols-4 top_social_link">
                    <a href="{{ getThemeSettingValue('_theme_setting_top_bar_top_bar_fb_link') }}">
                        <i class="fab fa-facebook px-2 py-2 hover:bg-[#EC1C24] rounded-lg"></i>
                    </a>
                    <a href="{{ getThemeSettingValue('_theme_setting_top_bar_top_bar_ln_link') }}">
                        <i class="fab fa-linkedin px-2 py-2 hover:bg-[#EC1C24] rounded-lg"></i>
                    </a>
                    <a href="{{ getThemeSettingValue('_theme_setting_top_bar_top_bar_tw_link') }}">
                        <i class="fab fa-twitter px-2 py-2 hover:bg-[#EC1C24] rounded-lg"></i>
                    </a>
                    <a href="{{ getThemeSettingValue('_theme_setting_top_bar_top_bar_yt_link') }}">
                        <i class="fab fa-youtube-square px-2 py-2 hover:bg-[#EC1C24] rounded-lg"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section> <!-----header top area end----->
