@extends('frontend.template.master')

@section('page-css')
<style>
  .img-fullwidth{
    height: 200px;
  }
</style>
@endsection

@section('content')

{{-- @dd($data) --}}
<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Administrative', 'breadcrumb' => 'Administrative'])



    <!-- Section: chairman -->
    <section id="team" class="bg-silver-deep">
      <div class="container pb-0">
        <div class="row mtli-row-clearfix text-center">
          <div class="col-md-4">&nbsp;</div>
          <div class="col-md-3 text-center">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{ asset('avatar/'.$data['chairmen']->user->avatar ?? '') }}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $data['chairmen']->name }}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{ $data['chairmen']->designation }}</h6>
                <p class="hidden-md">{{ $data['chairmen']->user ?  $data['chairmen']->user->name : '' }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="bg-silver-deep">
      <div class="container pb-0">
        <div class="row mtli-row-clearfix text-center">
          <div class="col-md-3">&nbsp;</div>
          <div class="col-md-3 text-center">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{ asset('avatar/'.$data['principal']->user->avatar ?? '') }}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $data['principal']->name }}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{ $data['principal']->designation }}</h6>
                <p class="hidden-md">{{ $data['principal']->user ?  $data['principal']->user->name : '' }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{ asset('avatar/'.$data['vice_principal']->user->avatar ?? '') }}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $data['vice_principal']->name }}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{ $data['vice_principal']->designation }}</h6>
                <p class="hidden-md">{{ $data['vice_principal']->user ?  $data['vice_principal']->user->name : '' }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: chairman -->
    <section id="team" class="bg-silver-deep">
      <div class="container">
        <div class="row mtli-row-clearfix">
            @foreach ($data['stuff'] as $stuff)
            {{-- @dd($stuff) --}}
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="{{ asset('avatar/'.$stuff->avatar) }}">
                    <div class="team-overlay"></div>
                    <ul class="styled-icons team-social icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <div class="team-details">
                    <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $stuff->teacher->name ?? '' }}</h4>
                    <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0 text-capitalize">{{ $stuff->teacher->designation ?? '' }}</h6>
                    <p class="hidden-md">{{ $stuff->name ?? '' }}</p>
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
