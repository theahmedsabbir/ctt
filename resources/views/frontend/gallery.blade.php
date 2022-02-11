@extends('frontend.template.master')

@section('page-css')
	<style type="text/css">
   .gallery{
    /*min-height: 150vh;*/
   } 
  </style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36" style="">{{ $type }}</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li class="text-white" style="">{{ $type }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    <!-- Gallery Grid 3 -->
    <section class="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            

            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">

                @foreach ($files as $file)
                  @if ($type == 'video')
                        
                    <!-- Portfolio Item Start -->
                    <div class="gallery-item branding">
                      <div class="thumb">
                        <img class="img-fullwidth" src="{{ $file->image ? asset('file/' . $file->image) : 'https://via.placeholder.com/400' }}" alt="project"  style="height: 248px;">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                          <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                              <a class="popup-vimeo" href="{{ $file->link }}"><i class="fa fa-play"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio Item End -->
                  @elseif($type == 'photo')

                    <!-- Portfolio Item Start -->
                    <div class="gallery-item">
                      <a href="{{ asset('file/' . $file->image) }}" data-lightbox="gallery-item" title="{{ $file->title }}"><img src="{{ asset('file/' . $file->image) }}" style="height: 248px;" alt=""></a>
                    </div>
                    <!-- Portfolio Item End -->

                  @else
                    {{-- false expr --}}
                  @endif
                @endforeach

              </div>


            </div>
          </div>
        </div>
      </div>
    </section>
    

</div>





@endsection

@section('page-js')
	
@endsection