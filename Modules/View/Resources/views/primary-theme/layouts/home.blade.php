<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('images/frontend-themes/primary/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="76x76"href="{{ asset('images/frontend-themes/primary/apple-icon.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    @include("view::primary-theme.layouts._partial.google-fonts")

    <link rel="stylesheet" href="{{ asset('css/frontend-themes/primary/owl/owl.carousel.min.css') }}">

    <title>{{ getThemeSettingValue('_theme_setting_school_name') }} - Home</title>

    @include("view::primary-theme.layouts._partial.tailwind-scripts")

    <link rel="stylesheet" href="{{ asset('css/frontend-themes/primary/style.css') }}">
</head>
<body>

    @if(getThemeSettingValue('_theme_setting_top_bar_visibility')=='yes')
        @include('view::'.getCurrentThemeId().'.template.topbar.'.  getThemeSettingValue('_theme_setting_top_bar_template'))
    @endif

    @include('view::'.getCurrentThemeId().'.template.header.'.  getThemeSettingValue('_theme_setting_header_template'))


    @if(getThemeSettingValue('_theme_setting_main_menu_visibility')=='yes')
        <x-menu-component/>
    @endif


    @if(getThemeSettingValue('_theme_setting_ticker_visibility')=='yes')
        @include('view::'.getCurrentThemeId().'.template.ticker.' . getThemeSettingValue('_theme_setting_ticker_template'))
    @endif

    @yield('content')


    @include('view::'.getCurrentThemeId().'.template.footer.' .getThemeSettingValue('_theme_setting_footer_template') )
    @include('view::'.getCurrentThemeId().'.template.copyright.default')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/frontend-themes/primary/owl/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                'items': {{getThemeSettingValue('_theme_setting_slider_item_to_show')}},
                'autoplay': {{getThemeSettingValue('_theme_setting_slider_autoplay')}},
                'autoplayTimeout': {{getThemeSettingValue('_theme_setting_slider_autoplayTimeout')}},
                'loop': {{getThemeSettingValue('_theme_setting_slider_loop')}},
                'autoplayHoverPause': {{getThemeSettingValue('_theme_setting_slider_autoplayHoverPause')}},
                'dots': {{getThemeSettingValue('_theme_setting_slider_dots')}},
                'lazyLoad': {{getThemeSettingValue('_theme_setting_slider_lazyLoad')}},
                'nav': {{getThemeSettingValue('_theme_setting_slider_nav_show')}},
                'navText': [{!! getThemeSettingValue('_theme_setting_slider_navText') !!}]
            });
        });
    </script>

</body>
</html>
