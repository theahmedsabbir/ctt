@extends('frontend.template.master')

@section('page-css')
	<style>
		.left{			
		    margin-top: 50px;
		    padding: 0 8%;
		    text-align: center;
		}
	</style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Principal\'s Message', 'breadcrumb' => 'Principal\'s Message'])


    <section id="courses" class="chairman">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">PRINCIPAL'S MESSAGE</h2>
              <p class="text-uppercase mb-0">MESSAGE FROM OUR HONOURABLE PRINCIPAL</p>
      			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
      			</div>
          </div>
        </div>


        <div class="row mtli-row-clearfix">

        	<div class="col-md-12">
        		<div class="right text-center">
        			<img src="{{ asset('frontend/images/chairman.png') }}" alt="" class="img-fluid">
        		</div>
        	</div>
        	<div class="col-md-12">
        		<div class="left">
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident ipsa impedit modi fugit magni vero vel ad natus placeat. Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Amet voluptatibus earum nesciunt, eum nihil expedita dolor vero obcaecati, deserunt eaque.</p>
        			<br>
        			<h3 class="name">Mohammad Abu Nasir</h3>
        			<h3 class="title">PhD <br>Chairman</h3>
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