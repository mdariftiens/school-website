<section class="footer_section bg-bgColor pt-10 pb-10 mt-10">
    <div class="container mx-auto">
        <div
            class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 text-white font-lato">

            <div class="footer_iterm">
                {!! getSidebarWithWidgets('footer-left-sidebar') !!}
            </div>

            <div class="footer_iterm">
                {!! getSidebarWithWidgets('footer-left-sidebar') !!}
            </div>

            <div class="footer_iterm">
                <h4 class="text-2xl font-medium mb-4">DOWNLOAD APP:</h4>
                <a href="#"><img class="mb-3" src="{{ asset('images/frontend-themes/primary/mobile.png') }}"
                                 alt="AppLogo"></a>
                <a href="#"><img src="{{ asset('images/frontend-themes/primary/iphone.png') }}" alt="AppLogo"></a>
            </div>

            <div class="footer_iterm">
                <h4 class="text-2xl font-medium mb-4">POWERED BY:</h4>
                <a href="#"><img class="mb-3"
                                 src="{{ asset('images/frontend-themes/primary/ClassTune-New-Logo.png') }}"
                                 alt="AppLogo"></a>
            </div>
        </div>
    </div>
</section><!--footer one-->
