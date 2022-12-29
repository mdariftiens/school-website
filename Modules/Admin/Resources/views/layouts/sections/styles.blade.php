<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('vendor/backend-themes/primary/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('vendor/backend-themes/primary/css/core.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/backend-themes/primary/css/theme-default.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend-themes/primary/demo.css') }}" />

<link rel="stylesheet" href="{{ asset('vendor/backend-themes/primary/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')
