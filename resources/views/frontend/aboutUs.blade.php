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
        <div class="row mtli-row-clearfix">
        	<div class="col-md-12">
        		<div class="left text-justify">
        			<h2>Mission</h2>
        			<p>CTT is modern and ideal polytechnic institution. It is working to make educated and technologically efficient engineer to contribute in the true economic development of Bangladesh and can lead a fairly enriched lives.<br>
CTT has a range of young and energetic engineers (instructors) besides some profound professor for imparting quality education. CTT always emphasis in enriches library, technical lab, training lab and well furnished classrooms for assuring true & realistic education. In the era of present globalization, CTT collaborates with some other polytechnic institutes in aboard for resource sharing and student transfer program. It is approved by BTEB and follows the rules of ministry of education.<br>
It arranges a sound and politics free educational environment where students and faculty members can learn and practice new knowledge, skill & insight; and develop themselves for meeting future demand.</p>
        			<br>
        			<h2>Vision</h2>
        			<p>Creating Engineer for future and imparting quality education.</p>
              <br>
              <h2>Goals</h2>
              <p>                     
                  <i class="fa fa-caret-right"></i> Make CTT polytechnic institute as international standard.<br>
                  <i class="fa fa-caret-right"></i> Providing practical and realistic education by creating sound educational environment.<br>
                  <i class="fa fa-caret-right"></i> Retaining a range of good professional engineer to teach students.<br>
                  <i class="fa fa-caret-right"></i> Developing an environment of involvement and professional culture among management and faculty members.<br>
                  <i class="fa fa-caret-right"></i> Arranging latest tools and technologies to foster quality education.<br>
                  <i class="fa fa-caret-right"></i> Sharing resources & expertise with local industries and international educational intuition thoughts strong networks.<br>
              </p>
        		</div>
        	</div>
        </div>
      </div>
    </section>

</div>





@endsection

@section('page-js')
	
@endsection