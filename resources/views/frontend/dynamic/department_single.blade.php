@extends('frontend.template.master')

@section('page-css')
	<style type="text/css">
		.link{
		    background: #094219;
    		color: #fff;
    		padding: 10px 12px;
		    display: inline-block;
		    text-decoration: none;
		    font-size: 14px;
		    font-weight: 600;
		    outline: 0;
		    line-height: 1.42857143;
		    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		    -webkit-tap-highlight-color: transparent;
		}
		.link:hover{
			color:#fff !important;
		}
	</style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Department Of CSE', 'breadcrumb' => 'Department Of CSE'])





    <section id="courses" class="aboutUs">
      <div class="container pb-40">
{{--         <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Admission Requirement</h2>
              <p class="text-uppercase mb-0">All Of Our Admission Requirement</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
			</div>
          </div>
        </div> --}}
        <div class="row mtli-row-clearfix">
        	<div class="col-md-12 pt-5 pb-5">
        		<div class="">
        			<img src="https://picsum.photos/1400/500" alt="" class="img-fluid">
        		</div>
        	</div>
        	<div class="col-md-8">
        		<div class="left">
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="right">
        			<h2>Important Links</h2>
        			<a href="" class="btn link d-block mb-5" style="width: 100%">Link</a>
        			<a href="" class="btn link d-block mb-5" style="width: 100%">Link</a>
        			<a href="" class="btn link d-block mb-5" style="width: 100%">Link</a>
        			<a href="" class="btn link d-block mb-5" style="width: 100%">Link</a>
        			<a href="" class="btn link d-block mb-5" style="width: 100%">Link</a>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    

</div>





@endsection

@section('page-js')
	
@endsection