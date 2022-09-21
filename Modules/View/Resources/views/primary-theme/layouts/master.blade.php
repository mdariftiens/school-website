<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('images/frontend-themes/primary/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="76x76"href="{{ asset('images/frontend-themes/primary/apple-icon.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">--}}
    <link rel="stylesheet" href="{{ asset('css/frontend-themes/primary/owl/owl.carousel.min.css') }}">

    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    /> -->
    <title>ClassTune CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                },
                extend: {
                    colors: {
                        color: '#da373d',
                        bgColor: '#5899b7',
                        buttonBgColor: '#00ADEE',
                        titleColor: '#3B5998'
                    },
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif'],
                        'lato': ['Lato', 'sans-serif'],
                    },
                    boxShadow: {
                        '3xl': '0_35px_60px_-15px_rgba(0,0,0,0.3)',
                    },
                    screens: {
                        // 'xs': '340px',
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/frontend-themes/primary/style.css') }}">
</head>
<body>

    @if(getThemeSettingValue('_theme_setting_top_bar_visibility')=='yes')
        @include('view::'.getCurrentThemeId().'.template.topbar.'.  getThemeSettingValue('_theme_setting_top_bar_template'))
    @endif

    @include('view::'.getCurrentThemeId().'.template.header.'.  getThemeSettingValue('_theme_setting_header_template'))


    @if(getThemeSettingValue('_theme_setting_main_menu_visibility')=='yes')
        @include('view::'.getCurrentThemeId().'.template.menu.' . getThemeSettingValue('_theme_setting_main_menu_template'))
    @endif


    @if(getThemeSettingValue('_theme_setting_ticker_visibility')=='yes')
    @if(  getCurrentRouteName() == 'home' && getThemeSettingValue('_theme_setting_ticker_visibility_only_homepage')=='yes')
        @include('view::'.getCurrentThemeId().'.template.ticker.' . getThemeSettingValue('_theme_setting_ticker_template'))
    @endif
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
                'items': 1,
                'autoplay': true,
                'autoplayTimeout': 3000,
                'loop': true,
                'autoplayHoverPause': true,
                'dots': true,
                'lazyLoad': true,
                'nav': true,
                'navText': ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            });
        });
    </script>

</body>
</html>
