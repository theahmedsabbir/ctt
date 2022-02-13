@extends('frontend.template.master')

@section('page-css')

@endsection

@section('content')


<div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        @include('frontend.includes.slider')
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>

    <!-- about us -->
    <section id="courses" class="bg-theme-white">
      <marquee class="container-fluid marquee">
      	@foreach (App\Models\File::where('type', 'notice')->orderBy('created_at', 'desc')->get() as $notice)
          <a class="" href="{{ url('list/notice'  ) }}">{{$notice->title}}</a>
        @endforeach
      </marquee>
    </section>

    <!-- Section: about us -->
    <section id="courses" class="aboutUs">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">ABOUT CTT</h2>
              <p class="text-uppercase mb-0">OUR HISTORY & PRESENT</p>
      			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
      			</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        	<div class="col-md-8">
        		<div class="left">
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="right">
        			<img src="{{ asset('frontend/images/logo-round.png') }}" alt="" class="img-fluid">
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <!-- Why Should You Choose CTT  -->
    <section id="courses" class="why-ctt">
        <div class="container pb-40">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="why-should">Why Should You Choose CTT ?</h2>
              </div>
            </div>
          </div>
          <div class="row mtli-row-clearfix mt-ctt-l">
              <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-4">
                            <div class="round">
                                <img src="{{ asset('/frontend/images/Vector.png') }}" class="ctt-img" />
                            </div>
                            <div class="export">Expert</div>
                            <span class="export">Instructors</span>
                            <p class="">
                                Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="round">
                                <img src="{{ asset('/frontend/images/Vector (1).png') }}" class="ctt-img1" />
                            </div>
                            <div class="export">Popular</div>
                            <span class="export" style="margin-left: 39px;">Courses</span>
                            <p class="">
                                Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="round" style="margin-left: 30px;">
                                <img src="{{ asset('/frontend/images/Vector (2).png') }}" class="ctt-img2" />
                            </div>
                                <div class="export-3">Modern</div>
                                <span class="export-33" style="margin-left: 61px;">Laboratory</span>
                                <p class="export-333">
                                    Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                                </p>
                            </div>
                        </div>
                  </div>
              </div>
              <div class="col-md-12" style="margin-left: 85px;">
                <div class="row">
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (3).png') }}" class="ctt-img3" />
                          </div>
                          <div class="export">Hostel</div>
                          <span class="export" style="margin-left: 39px;">Facilites</span>
                          <p class="">
                              Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                          </p>
                      </div>
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (4).png') }}" class="ctt-img4" />
                          </div>
                          <div class="export">Popular</div>
                          <span class="export" style="margin-left: 39px;">Courses</span>
                          <p class="">
                              Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                          </p>
                      </div>
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (5).png') }}" class="ctt-img5" />
                          </div>
                              <div class="export" style="margin-left: 60px;">Job</div>
                              <span class="export">Opportunities</span>
                              <p class="">
                                  Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                              </p>
                          </div>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </section>

    <!-- gallery -->
    <section id="technology" class="">
        <div class="container">
          <div class="row mtli-row-clearfix">
              <div class="col-md-12">
                  <div class="row">
                    @foreach (App\Models\Department::orderBy('id', 'asc')->take(6)->get() as $department)
                    <div class="col-md-4 electrical " style="margin-bottom: 20px;">
                        <a href="{{ url('department/' . $department->slug ) }}">
                            <img src="{{ asset('department/' . $department->image ) }}" alt="" class="image" style="border-radius: 10px; height: 188px;">
                            <div class="middle">
                                <div class="text">{{ $department->name }}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                  </div>
              </div>
          </div>
        </div>
    </section>


    <!-- Section: chairman msg -->
    <section id="courses" class="chairman">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">CHAIRMAN’S MESSAGE</h2>
              <p class="text-uppercase mb-0">MESSAGE FROM OUR HONOURABLE CHAIRMAN</p>
      			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
      			</div>
          </div>
        </div>


        <div class="row mtli-row-clearfix">
            <div class="owl-carousel-1col" data-dot="false">
                <div class="item">
		        	<div class="col-md-4">
		        		<div class="left">
		        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque ut. <br>
                    <a href="{{ url('/chairman-message') }}" class="text-primary">Read More</a></p>
		        			<br>
		        			<h3 class="name">Mohammad Abu Nasir</h3>
		        			<h3 class="title">PhD <br>Chairman</h3>
		        		</div>
		        	</div>
		        	<div class="col-md-8">
		        		<div class="right">
		        			<img src="{{ asset('frontend/images/chairman.png') }}" alt="" class="img-fluid">
		        		</div>
		        	</div>
                </div>

            </div>
        </div>
      </div>
    </section>

    <!-- achievement section -->
    <section id="courses" class="chairman bg-grey">
        <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">OUR ACHIEVEMENTS</h2>
                <p class="text-uppercase mb-0">OUR ACHIEVEMENTS & FAME</p>
                <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
              </div>
            </div>
          </div>

          <div class="row mtli-row-clearfix">
              <div class="owl-carousel-1col" data-dot="false">
                  <div class="item">
                      <div class="col-md-6">
                          <div class="left">
                              <img src="{{ asset('frontend/images/achivement.png') }}" alt="" class="img-fluid">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="right">
                            <h2 style="font-size: 22px; text-transform: uppercase; margin-top: 0">Regional Level 2nd Position</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                            <p>Skill Competition 2017 <br>
                            Regional Level 2nd Position<br>
                            National Level- 17th <br>
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                    <div class="col-md-6">
                        <div class="left">
                            <img src="{{ asset('frontend/images/slider1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h2 style="font-size: 22px; text-transform: uppercase; margin-top: 0;">Regional Level 4th  Position</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                          <p>Skill Competition 2018<br>
                          Regional Level 4th  Position<br>
                          National Level- 9th </p>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-6">
                        <div class="left">
                            <img src="{{ asset('frontend/images/achievement2.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h2 style="font-size: 22px; text-transform: uppercase; margin-top: 0;">Achieved 1st place in Gazipur in 2018</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                          <p>Diploma Engg. Final Result – 2018 <br>
                          Achieved 1st place in Gazipur in 2018<br></p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </section>

    <!-- some innovations  -->
    <section id="technology" class="">
        <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">STUDENT’s INVENTIONS</h2>
                <p class="text-uppercase mb-0">Some Innovation of our Students</p>
                <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
              </div>
            </div>
          </div>
          <div class="row mtli-row-clearfix">
              <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 computer">
                        <a href="#">
                            <img src="{{ asset('frontend/images/23090163.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Computer Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 electrical">
                        <a href="#">
                            <img src="{{ asset('frontend/images/Electrical lab2 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Electrical Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 civil">
                        <a href="#">
                        <img src="{{ asset('frontend/images/20191102_110304.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Civil Technology</div>
                        </div>
                        </a>
                    </div>
                  </div>
                  <div class="row" style="margin-top: 25px;">
                    <div class="col-md-4 power">
                        <a href="#">
                            <img src="{{ asset('frontend/images/23090144.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Power Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 machanical">
                        <a href="#">
                        <img src="{{ asset('frontend/images/Machanical lab 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Machanical Technology</div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 taxtile">
                        <a href="#">
                        <img src="{{ asset('frontend/images/Machanical lab 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Taxtile Technology</div>
                        </div>
                        </a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </section>

    <!-- Success story of our students -->
    <section id="courses" class="chairman bg-grey">
        <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">Success story</h2>
                <p class="text-uppercase mb-0">Success story of our students</p>
                <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
              </div>
            </div>
          </div>

          <div class="row mtli-row-clearfix">
              <div class="owl-carousel-1col" data-dot="false">
                  <div class="item">
                      <div class="col-md-6">
                          <div class="left">
                              <img src="{{ asset('frontend/images/achivement.png') }}" alt="" class="img-fluid">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="right">
                              <h2 style="font-size: 22px;">BEST INSTITUTION FOR ENGINEERING DIPLOMA</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                    <div class="col-md-6">
                        <div class="left">
                            <img src="{{ asset('frontend/images/slider1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h2 style="font-size: 22px;">BEST INSTITUTION FOR ENGINEERING DIPLOMA</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </section>

    <!-- number section -->
    <section class="parallax layer-overlay overlay-theme-colored-9 number" data-bg-img="images/bg/bg1.jpg" data-parallax-ratio="0.4">
        <div class="container pt-70 pb-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
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
