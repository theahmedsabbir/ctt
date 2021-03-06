@extends('admin.template.master')

@section('content')

<div class="br-pagetitle">
<i class="icon ion-ios-home-outline"></i>
<div>
  <h4><span style="text-transform: capitalize;">{{ Session::get('admin_role') }}</span> Dashboard</h4>
  <p class="mg-b-0">Welcome {{ Session::get('admin_name') }}, You can manage all the tasks from dashboard.</p>
</div>
</div>

<div class="br-pagebody">
<div class="row row-sm">
  <div class="col-sm-6 col-xl-3">
    <div class="bg-info rounded overflow-hidden">
      <div class="pd-x-20 pd-t-20 d-flex align-items-center">
        <i class="ion ion-android-people  tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Users</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ App\Models\User::count() }}</p>
        </div>
      </div>
      <div id="ch1" class="ht-50 tr-y-1"></div>
    </div>
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
    <div class="bg-purple rounded overflow-hidden">
      <div class="pd-x-20 pd-t-20 d-flex align-items-center">
        <i class="ion ion-wrench  tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Installers</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ App\Models\Installer::count() }}</p>
        </div>
      </div>
      <div id="ch3" class="ht-50 tr-y-1"></div>
    </div>
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
    <div class="bg-teal rounded overflow-hidden">
      <div class="pd-x-20 pd-t-20 d-flex align-items-center">
        <i class="ion ion-aperture  tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Products</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ App\Models\Product::count() }}</p>
        </div>
      </div>
      <div id="ch2" class="ht-50 tr-y-1"></div>
    </div>
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
    <div class="bg-primary rounded overflow-hidden">
      <div class="pd-x-20 pd-t-20 d-flex align-items-center">
        <i class="ion ion-android-cart tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Orders</p>
          <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ App\Models\Order::count() }}</p>
        </div>
      </div>
      <div id="ch4" class="ht-50 tr-y-1"></div>
    </div>
  </div><!-- col-3 -->
</div><!-- row -->

</div><!-- br-pagebody -->

@endsection