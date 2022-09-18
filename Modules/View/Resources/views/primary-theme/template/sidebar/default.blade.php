<div class="sm:w-full  md:w-1/4 lg:w-1/3 xl:w-1/3 2xl:w-1/3">
    <!--Sidebar area start-->
    <div class="sidebar_area">

        @if( isHomepageRightSidebarVisible() )
            <!-- Right sidebar container -->
        {!! getSidebarWithWidgets('home-right-sidebar') !!}
        @endif

        @if( isHomepageLeftSidebarVisible() )
            <!-- left sidebar container -->
        {!! getSidebarWithWidgets('home-left-sidebar') !!}
        @endif
    </div>
    <!--Sidebar area end-->

</div><!--Sidebar content-->
