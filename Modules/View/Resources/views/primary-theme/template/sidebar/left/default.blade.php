@if( isHomepageLeftSidebarVisible() && getCurrentRouteName()=='home' )

    <div class="sm:w-full  md:w-1/4 lg:w-1/3 xl:w-1/3 2xl:w-1/3">
    <!--Sidebar area start-->
    <div class="sidebar_area">
        <!-- left sidebar container -->
        {!! getSidebarWithWidgets('home-left-sidebar') !!}
    </div>
    <!--Sidebar area end-->

</div><!--Sidebar content-->
@endif

@if( isGeneralPageLeftSidebarVisible() && getCurrentRouteName()!='home' )

    <div class="sm:w-full  md:w-1/4 lg:w-1/3 xl:w-1/3 2xl:w-1/3">
    <!--Sidebar area start-->
    <div class="sidebar_area">
        <!-- left sidebar container -->
        {!! getSidebarWithWidgets('general-left-sidebar') !!}
    </div>
    <!--Sidebar area end-->

</div><!--Sidebar content-->
@endif
