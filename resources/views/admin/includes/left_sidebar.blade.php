
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

        {{-- @dd(Session::all()) --}}

        {{-- get the role and permission array --}}
        @php
          $role = App\Models\Role::where('slug', Session::get('admin_role'))->first(); // ei admin er data
          $role_permissions = [];
          if($role != null && $role->permissions != null){
            $role_permissions = json_decode($role->permissions); // ei admin er ei roler permission ki ki 
          }
          // dd($role->permissions);
          // dd($role_permissions);
        @endphp

        {{-- admins --}}
        @if (Session::get('admin_role') == 'admin' || in_array('admin', $role_permissions))
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
        @endif

        {{-- users --}}
        @if (Session::get('admin_role') == 'admin' || in_array('user', $role_permissions))
          <li class="br-menu-item">
            <a href="{{ url('admin/user/index') }}" class="br-menu-link {{ Request::is('admin/user*') ? 'active' : ''}}">
              <i class="menu-item-icon icon ion-android-people tx-24"></i>
              <span class="menu-item-label" style="text-transform: capitalize;">users</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
        @endif

        {{-- Installer --}}

        @if (Session::get('admin_role') == 'admin' || in_array('installer', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/installer*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-wrench tx-20"></i>
              <span class="menu-item-label">Installer</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/installer*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/installer/index') }}" class="sub-link {{ Request::is('admin/installer/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/installer/create') }}" class="sub-link {{ Request::is('admin/installer/create') ? 'active' : ''}}">Add</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/installer/bulk') }}" class="sub-link {{ Request::is('admin/installer/bulk') ? 'active' : ''}}">Bulk</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/installer/charge') }}" class="sub-link {{ Request::is('admin/installer/charge') ? 'active' : ''}}">Charge</a>
              </li>

            </ul>
          </li>
        @endif

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Product Upload</label>
        {{-- Brands --}}

        @if (Session::get('admin_role') == 'admin' || in_array('brand', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/brand*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-social-instagram-outline tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Brands</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/brand/index') }}" class="sub-link {{ Request::is('admin/brand/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/brand/create') }}" class="sub-link {{ Request::is('admin/brand/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif
        {{-- patterns --}}

        @if (Session::get('admin_role') == 'admin' || in_array('pattern', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/pattern*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-ios-list-outline tx-20"></i>
              <span class="menu-item-label">Patterns</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/pattern*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/pattern/index') }}" class="sub-link {{ Request::is('admin/pattern/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/pattern/create') }}" class="sub-link {{ Request::is('admin/pattern/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif
        {{-- special offer --}}

        @if (Session::get('admin_role') == 'admin' || in_array('special-offer', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/special-offer*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-flash tx-24"></i>
              <span class="menu-item-label">Special Offers</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/special-offer*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/special-offer/index') }}" class="sub-link {{ Request::is('admin/special-offer/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/special-offer/create') }}" class="sub-link {{ Request::is('admin/special-offer/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif
        {{-- Original Equipments --}}

        @if (Session::get('admin_role') == 'admin' || in_array('original-equipment', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/original-equipment*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-ios-speedometer-outline tx-20"></i>
              <span class="menu-item-label">Original Equipments</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/original-equipment*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/original-equipment/index') }}" class="sub-link {{ Request::is('admin/original-equipment/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/original-equipment/create') }}" class="sub-link {{ Request::is('admin/original-equipment/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif
        {{-- Products --}}

        @if (Session::get('admin_role') == 'admin' || in_array('product', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/product*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-aperture tx-20"></i>
              <span class="menu-item-label">Products</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/product*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/product/index') }}" class="sub-link {{ Request::is('admin/product/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/product/create') }}" class="sub-link {{ Request::is('admin/product/create') ? 'active' : ''}}">Add</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/product/create/bulk') }}" class="sub-link {{ Request::is('admin/product/create/bulk') ? 'active' : ''}}">Bulk</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/product/tax/') }}" class="sub-link {{ Request::is('admin/product/tax/') ? 'active' : ''}}">Tax</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/product/visibility/') }}" class="sub-link {{ Request::is('admin/product/visibility/') ? 'active' : ''}}">Visibility</a>
              </li>

            </ul>
          </li>
        @endif

        {{-- profit percentage --}}

        @if (Session::get('admin_role') == 'admin' || in_array('profit-percentage', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/profit-percentage*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i>
              <span class="menu-item-label">Profit Percentage</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/profit-percentage*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/profit-percentage/index') }}" class="sub-link {{ Request::is('admin/profit-percentage/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/profit-percentage/create') }}" class="sub-link {{ Request::is('admin/profit-percentage/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif

        @if (Session::get('admin_role') == 'admin' || in_array('mobile-van-charge', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/mobile-van-charge*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-car tx-20"></i>
              <span class="menu-item-label">Mobile Van Charge</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/mobile-van-charge*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/mobile-van-charge/index') }}" class="sub-link {{ Request::is('admin/mobile-van-charge/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/mobile-van-charge/create') }}" class="sub-link {{ Request::is('admin/mobile-van-charge/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Orders</label>
        {{-- Promo Code --}}

        @if (Session::get('admin_role') == 'admin' || in_array('promo-code', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/promo-code*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-star-half tx-20"></i>
              <span class="menu-item-label">Promo Code</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/promo-code*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/promo-code/index') }}" class="sub-link {{ Request::is('admin/promo-code/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/promo-code/create') }}" class="sub-link {{ Request::is('admin/promo-code/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif
        {{-- Order --}}

        @if (Session::get('admin_role') == 'admin' || in_array('order', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/order*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-android-cart tx-20"></i>
              <span class="menu-item-label">Order</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/order*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/order/index') }}" class="sub-link {{ Request::is('admin/order/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/order/email-template') }}" class="sub-link {{ Request::is('admin/order/email-template') ? 'active' : ''}}">Email Template</a>
              </li>

            </ul>
          </li>
        @endif

        {{-- Supplier --}}

        @if (Session::get('admin_role') == 'admin' || in_array('supplier', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/supplier*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-help-buoy tx-20"></i>
              <span class="menu-item-label">Supplier</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/supplier*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/supplier/index') }}" class="sub-link {{ Request::is('admin/supplier/index') ? 'active' : ''}}">Manage</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/supplier/create') }}" class="sub-link {{ Request::is('admin/supplier/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif

        {{-- Estimations --}}

        @if (Session::get('admin_role') == 'admin' || in_array('order', $role_permissions))
          <li class="br-menu-item">
            <a href="{{ url('admin/order/estimation/index') }}" class="br-menu-link {{ Request::is('admin/order/estimation/index') ? 'active' : ''}}">
              <i class="menu-item-icon icon ion-chatbox-working tx-24"></i>
              <span class="menu-item-label" style="text-transform: capitalize;">estimations</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->

        
          <li class="br-menu-item">
            <a href="{{ url('admin/order/lpo/index') }}" class="br-menu-link {{ Request::is('admin/order/lpo/index') ? 'active' : ''}}">
              <i class="menu-item-icon icon ion-clipboard tx-24"></i>
              <span class="menu-item-label" style="text-transform: capitalize;">Lpo</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
        @endif


      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Socialize</label>

        {{-- Blog --}}
        @if (Session::get('admin_role') == 'admin' || in_array('blog', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/blog*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-compose tx-20"></i>
              <span class="menu-item-label">Blog</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/blog*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/blog/index') }}" class="sub-link {{ Request::is('admin/blog/index') ? 'active' : ''}}">Posts</a>
              </li>

              <li class="sub-item">
                <a href="{{ url('admin/blog/create') }}" class="sub-link {{ Request::is('admin/blog/create') ? 'active' : ''}}">Add</a>
              </li>

            </ul>
          </li>
        @endif


      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Reports</label>


        {{-- Report --}}
        @if (Session::get('admin_role') == 'admin' || in_array('report', $role_permissions))
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/report*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon ion-stats-bars tx-20"></i>
              <span class="menu-item-label">Report</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/report*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/report/sales') }}" class="sub-link {{ Request::is('admin/report/sales') ? 'active' : ''}}">Sales Report</a>
                <a href="{{ url('admin/report/gross-margin') }}" class="sub-link {{ Request::is('admin/report/gross-margin') ? 'active' : ''}}">GM Report</a>
                <a href="{{ url('admin/report/purchase-order') }}" class="sub-link {{ Request::is('admin/report/purchase-order') ? 'active' : ''}}">Purchase Order</a>
                <a href="{{ url('admin/report/sales-by-size') }}" class="sub-link {{ Request::is('admin/report/sales-by-size') ? 'active' : ''}}">Sales By Size</a>
                <a href="{{ url('admin/report/vendor') }}" class="sub-link {{ Request::is('admin/report/vendor') ? 'active' : ''}}">Vendor Report</a>
                <a href="{{ url('admin/report/customer') }}" class="sub-link {{ Request::is('admin/report/customer') ? 'active' : ''}}">Customer Report</a>
                <a href="{{ url('admin/report/soa') }}" class="sub-link {{ Request::is('admin/report/soa') ? 'active' : ''}}">Statement Of Account</a>

              </li>

            </ul>
          </li>
        @endif




{{--         <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{ Request::is('admin/pattern*') ? 'show-sub' : ''}}">
            <i class="menu-item-icon icon ion-ios-list-outline tx-20"></i>
            <span class="menu-item-label">Patterns</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub" style="{{ Request::is('admin/pattern*') ? 'display: block;' : 'display: none;'}}">

            <li class="sub-item">
              <a href="{{ url('admin/pattern/index') }}" class="sub-link {{ Request::is('admin/pattern/index') ? 'active' : ''}}">Manage</a>
            </li>

            <li class="sub-item">
              <a href="{{ url('admin/pattern/create') }}" class="sub-link {{ Request::is('admin/pattern/create') ? 'active' : ''}}">Add</a>
            </li>

          </ul>
        </li> --}}
      </ul><!-- br-sideleft-menu -->



      <br>
    </div><!-- br-sideleft -->