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

    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36" style="text-transform: capitalize;">{{ $type }}</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="text-white" style="text-transform: capitalize;">{{ $type }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="courses" class="aboutUs">
      <div class="container pb-40">
        <div class="row mtli-row-clearfix">
        	<div class="col-md-8">
        		<div class="left">
                    @foreach ($files as $file)                        
                        <div class="box mb-3">                      
                            <h2><a href="{{ asset('/file/' . $file->file) }}" target="_blank">{{ $file->title }}</a></h2>
                            <p>{{ Str::limit($file->description, 200, ' (...)') }}</p>
                        </div>
                    @endforeach
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