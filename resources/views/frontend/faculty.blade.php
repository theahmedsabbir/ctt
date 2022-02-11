@extends('frontend.template.master')

@section('page-css')

@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Faculty', 'breadcrumb' => 'Faculty'])



    <!-- Section: chairman -->

    <!-- Section: chairman -->
    <section id="team" class="bg-silver-deep">
      <div class="container">
        <div class="row mtli-row-clearfix">
            @foreach ($teacher as $info)
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('avatar/'.$info->avatar) }}">
                    <div class="team-overlay"></div>
                    <ul class="styled-icons team-social icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <div class="team-details">
                    <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $info->name }}</h4>
                    <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{ $info->teacher->name ?? '' }}</h6>
                    <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>
</div>





@endsection

@section('page-js')

@endsection
