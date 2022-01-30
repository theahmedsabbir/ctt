@extends('frontend.template.master')

@section('page-css')
	
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('frontend') }}/images/slider1.png">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="text-white">About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- Section:AT A GLANCE -->
    <section id="courses" class="aboutUs atAGlance text-justify">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">AT A GLANCE</h2>              
              <p class="text-uppercase mb-0">OUR INSTITUTION AT A GLANCE</p>
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

    <!-- Section:AT A GLANCE -->
    <section id="courses" class="History text-justify">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
          	<div class="col-md-6">&nbsp;</div>
            <div class="col-md-6">
              <h2 class="text-uppercase title">HISTORY OF CTT</h2>              
              <p class="text-uppercase mb-0">OUR HISTORY IN A BRIEF</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">	
			</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        	<div class="col-md-6">

        		<div class="right">
        			<img src="{{ asset('frontend/images/tour.jpg') }}" alt="" class="img-fluid">
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="left">
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        </div>
      </div>
    </section>


    <!-- Why study -->
    <section id="courses" class="aboutUs atAGlance text-justify">
      <div class="container pb-40">
        <div class="section-title text-left">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Why Study</h2>              
              <p class="text-uppercase mb-0">WHY STUDY AT CTT</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">	
			</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        	<div class="col-md-12">
        		<div class="left text-justify">
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        </div>
      </div>
    </section>


    <!-- MISSION AND VISSION -->
    <section id="courses" class="aboutUs atAGlance text-justify" style="background: #F9F9F6;">
      <div class="container pb-40">
        <div class="section-title text-left">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Mission and Vision</h2>              
              <p class="text-uppercase mb-0">ABOUT OUR Mission and Vision</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">	
			</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        	<div class="col-md-12">
        		<div class="left text-justify">
        			<h2>Mission</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Vision</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        </div>
      </div>
    </section>

</div>





@endsection

@section('page-js')
	
@endsection