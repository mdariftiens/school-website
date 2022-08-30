<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{url('/')}}" class="app-brand-link">
      <span class="app-brand-logo demo">
        @include('backend::_partials.macros',["width"=>25,"withbg"=>'#696cff'])
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">{{config('variables.templateName')}}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

      <li class="menu-item ">
          <a href="{{ route('dashboard') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>Dashboards</div>
          </a>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Media Manager</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('media.create') }}" class="menu-link">
                      <div>Add Media</div>
                  </a>
              </li>
          </ul>
      </li>


      <li class="menu-item ">
          <a href="{{ route('manageSidebarWidgets') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>Manage Sidebar Widgets</div>
          </a>
      </li>
      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Widgets</div>
          </a>
          <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="{{ route('widgets.index') }}" class="menu-link">
                      <div>Widgets</div>
                  </a>
              </li>
          </ul>
      </li>


    {{-- main menu --}}
    <li class="menu-item active open">
      <a href="{{ 'javascript:void(0);' }}" class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}" @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>

        <i class="{{ '$menu->icon' }}"></i>

        <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
      </a>

      {{-- submenu --}}
      @isset($menu->submenu)
      @include('backend::layouts.sections.menu.submenu',['menu' => $menu->submenu])
      @endisset
    </li>
  </ul>

</aside>
