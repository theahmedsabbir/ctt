@extends('frontend.template.master')

@section('page-css')
	<style>
		.pdf{
			padding-top: 30px;
		}
		.description{
		    font-size: 18px;
    		line-height: 30px;
		}
	</style>
@endsection

@section('content')


<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Notice', 'breadcrumb' => 'Notice'])


    <section id="team" class="bg-silver-deep">
      <div class="container pb-0">
        <div class="row mtli-row-clearfix text-center">
        	<div class="col-md-12">
        		<h3 class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Soluta, optio.</h3>
        		<div class="pdf">
        			<img src="https://picsum.photos/1200/600" alt="" class="img-fluid">
        		</div>
        		<br><br>
        		<p class="text-justify description">
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis asperiores voluptatibus, harum illum eligendi doloribus aspernatur adipisci ullam sint, magni, eaque obcaecati enim unde autem maiores saepe at deserunt? Repellat non omnis, maxime laborum eius unde minus corporis similique animi. Aspernatur, nemo perferendis dolorum id, non sequi a veniam? Incidunt iusto quasi blanditiis laborum quos quam assumenda dolor repellat laudantium! Temporibus totam corporis, dicta officia rem magni ipsam ullam. Assumenda explicabo incidunt porro iusto veritatis, repellat voluptate modi officia, facilis earum ut deleniti doloremque maxime beatae deserunt, quas dolor facere quibusdam. Nemo molestias ab reprehenderit nostrum fugit soluta non tempora!
        		</p>
        		<br><br><br>
        	</div>
        </div>
      </div>
    </section>
    

</div>





@endsection

@section('page-js')
	
@endsection