@extends('frontend.template.master')

@section('page-css')
<style>
.box{
    box-shadow: 0px 0px 30px rgb(0 0 0 / 14%);
    padding: 17px 23px;
    margin-bottom: 30px;
}
.box h2{
	margin: 0;
	margin-bottom: 10px;
}
</style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Page Name', 'breadcrumb' => 'Page Breadcrumb'])



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
        	<div class="col-md-8">
        		<div class="left">
        			<div class="box mb-3">        				
	        			<h2><a href="">Lorem ipsum dolor sit amet.</a></h2>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur.</p>
        			</div>
        			<div class="box mb-3">        				
	        			<h2><a href="">Lorem ipsum dolor sit amet.</a></h2>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur.</p>
        			</div>
        			<div class="box mb-3">        				
	        			<h2><a href="">Lorem ipsum dolor sit amet.</a></h2>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur.</p>
        			</div>
        			<div class="box mb-3">        				
	        			<h2><a href="">Lorem ipsum dolor sit amet.</a></h2>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur.</p>
        			</div>
        			<div class="box mb-3">        				
	        			<h2><a href="">Lorem ipsum dolor sit amet.</a></h2>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur.</p>
        			</div>
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

    

</div>





@endsection

@section('page-js')
	
@endsection