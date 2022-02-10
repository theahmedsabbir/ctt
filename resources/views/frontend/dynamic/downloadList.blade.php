@extends('frontend.template.master')

@section('page-css')
<style>
	.left{}
</style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Admission Requirement', 'breadcrumb' => 'Admission Requirement'])



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
        			<h2>Lorem ipsum dolor sit amet.</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<h2>Lorem ipsum dolor sit amet.</h2>
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

    

</div>





@endsection

@section('page-js')
	
@endsection