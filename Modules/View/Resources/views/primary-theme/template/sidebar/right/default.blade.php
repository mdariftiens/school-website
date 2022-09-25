@if( isHomepageRightSidebarVisible() )

    <div class="sm:w-full  md:w-1/4 lg:w-1/3 xl:w-1/3 2xl:w-1/3">
    <!--Sidebar area start-->
    <div class="sidebar_area">
        <!-- Right sidebar container -->
        {!! getSidebarWithWidgets('home-right-sidebar') !!}

    </div>
    <!--Sidebar area end-->

</div><!--Sidebar content-->
@endif

@if( isGeneralPageRightSidebarVisible() )

    <div class="sm:w-full  md:w-1/4 lg:w-1/3 xl:w-1/3 2xl:w-1/3">
        <!--Sidebar area start-->
        <div class="sidebar_area">
            <!-- Right sidebar container -->
            {!! getSidebarWithWidgets('general-right-sidebar') !!}
        </div>
        <!--Sidebar area end-->

    </div><!--Sidebar content-->
@endif
