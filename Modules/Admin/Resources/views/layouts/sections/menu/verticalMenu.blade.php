<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{url('/')}}" class="app-brand-link">
      <span class="app-brand-logo demo">
        @include('admin::_partials.macros',["width"=>25,"withbg"=>'#696cff'])
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
                  <a href="{{ route('media.index') }}" class="menu-link">
                      <div>Add Media</div>
                  </a>
              </li>
          </ul>
      </li>


      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Settings</div>
          </a>
          <ul class="menu-sub">
              @foreach(getThemeSections() as $section)
              <li class="menu-item ">
                  <a href="{{ route('settings.create') }}?section={{ $section }}" class="menu-link">
                      <div>{{ ucwords($section) }}</div>
                  </a>
              </li>
              @endforeach
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

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Blog</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('blog.category.index') }}" class="menu-link">
                      <div>Category</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Events</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('event-category.index') }}" class="menu-link">
                      <div>Event Category</div>
                  </a>
              </li>
          </ul>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('event.index') }}" class="menu-link">
                      <div>Event List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Notice</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('notice-category.index') }}" class="menu-link">
                      <div>Notice Category</div>
                  </a>
              </li>
          </ul>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('notice.index') }}" class="menu-link">
                      <div>Notice List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>File Upload</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('file-upload-category.index') }}" class="menu-link">
                      <div>File Upload Category</div>
                  </a>
              </li>
          </ul>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('file-upload.index') }}" class="menu-link">
                      <div>File List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Gallery</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('gallery.index') }}" class="menu-link">
                      <div>Gallery List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Slider</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('slider.index') }}" class="menu-link">
                      <div>Slider List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Message</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('message.index') }}" class="menu-link">
                      <div>Message List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Menu</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('manage-menus') }}" class="menu-link">
                      <div>Menu</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Management Committee</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('management-committee.index') }}" class="menu-link">
                      <div>Management Committee</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Achievements</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('achievements.index') }}" class="menu-link">
                      <div>Achievement List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>News</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('news.index') }}" class="menu-link">
                      <div>News List</div>
                  </a>
              </li>
          </ul>
      </li>

      <li class="menu-item" style="">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx "></i>
              <div>Employee</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item ">
                  <a href="{{ route('employee-category.index') }}" class="menu-link">
                      <div>Employee Category</div>
                  </a>
              </li>
              <li class="menu-item ">
                  <a href="{{ route('employee-department.index') }}" class="menu-link">
                      <div>Employee department</div>
                  </a>
              </li>
              <li class="menu-item ">
                  <a href="{{ route('employee-designation.index') }}" class="menu-link">
                      <div>Employee designation</div>
                  </a>
              </li>
              <li class="menu-item ">
                  <a href="{{ route('employee-list.index') }}" class="menu-link">
                      <div>Employee list</div>
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
      @include('admin::layouts.sections.menu.submenu',['menu' => $menu->submenu])
      @endisset
    </li>
  </ul>

</aside>
