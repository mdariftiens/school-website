<!-- BEGIN: Vendor JS-->
<script src="{{ asset('vendor/backend-themes/primary/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('vendor/backend-themes/primary/libs/popper/popper.js') }}"></script>
<script src="{{ asset('vendor/backend-themes/primary/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/backend-themes/primary/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/backend-themes/primary/js/menu.js') }}"></script>
<script src="{{ asset('vendor/backend-themes/primary/libs/ckeditor/ckeditor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset('js/backend-themes/primary/main.js') }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
@stack('menu-script')
