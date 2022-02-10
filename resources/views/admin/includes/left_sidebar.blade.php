
    <div class="br-logo"><a href="{{ url('admin/dashboard') }}"><span>[</span>Tyre <i>guru</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ url('admin/dashboard') }}" class="br-menu-link {{ Request::is('admin/dashboard') ? 'active' : ''}}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Registrations</label>

          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-person tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Admins</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/admin*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/admin/index') }}" class="sub-link {{ Request::is('admin/admin/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/admin/create') }}" class="sub-link {{ Request::is('admin/admin/create') ? 'active' : ''}}">Add</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/admin/role/index') }}" class="sub-link {{ Request::is('admin/admin/role/*') ? 'active' : ''}}">Roles</a>
              </li>

            </ul>
          </li>
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/admin*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-person tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Department</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/department*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/department/index') }}" class="sub-link {{ Request::is('admin/department/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/department/create') }}" class="sub-link {{ Request::is('admin/department/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>
      </ul><!-- br-sideleft-menu -->



      <br>
    </div><!-- br-sideleft -->
