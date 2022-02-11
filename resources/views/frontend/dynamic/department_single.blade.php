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
    @php
        $name = $department->name;
    @endphp
    
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36" style="">{{ $name }}</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Department</a></li>
                <li class="text-white" style="">{{ $name }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>





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
        			<img src="{{ asset('/department/' . $department->image) }}" alt="" class="img-fluid" style="min-width: 100%">
        		</div>
        	</div>
        	<div class="col-md-8">
        		<div class="left">
                    {!! $department->description !!}
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="right">
        			<h2>Important Links</h2>
                    <a href="{{ url('/admission/admission-circular') }}"  class="btn link d-block mb-5" style="width: 100%">Admission Circular</a>
                    <a href="{{ url('/admission/admission-form') }}"  class="btn link d-block mb-5" style="width: 100%">Admission Form</a>
                    <a href="{{ url('/admission/admission-requirement') }}"  class="btn link d-block mb-5" style="width: 100%">Admission Requirement</a>
                    <a href="{{ url('/admission/prospectus') }}"  class="btn link d-block mb-5" style="width: 100%">Prospectus</a>
                    <a href="{{ url('/admission/fee') }}"  class="btn link d-block mb-5" style="width: 100%">Fee</a>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    

</div>





@endsection

@section('page-js')
	
@endsection