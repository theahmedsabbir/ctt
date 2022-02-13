@extends('admin.template.master')

@section('content')

@include('admin.account.header', ['page' => 'Edit'])


<div class="br-pagebody">
    <div class="br-section-wrapper">
    	
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/account/update', $account->id) }}" method="POST" enctype="multipart/form-data">
      			@csrf                      

				<!-- semester -->
				<div class="col-md-12 col-12 form-group">
				  <label for="semester" class="text-capitalize">semester</label><span class="require-span">*</span>
				  <input type="text" class="form-control" name="semester" value="{{ $account->semester }}" required>
				</div>

				<!-- total -->
				<div class="col-md-12 col-12 form-group">
				  <label for="total" class="text-capitalize">total</label><span class="require-span">*</span>
				  <input type="number" step="0.01" class="form-control" name="total" value="{{ $account->total }}" required>
				</div>

				<!-- paid -->
				<div class="col-md-12 col-12 form-group">
				  <label for="paid" class="text-capitalize">paid</label><span class="require-span">*</span>
				  <input type="number" step="0.01" class="form-control" name="paid" value="{{ $account->paid }}" required>
				</div>


      			<div class="form-group">
      				<button type="submit" class="btn btn-teal mt-3">Submit</button>
      			</div>
      		</form>
      	</div>
      </div>
	</div>
    <!-- br-section-wrapper -->
</div>


<script type="text/javascript">

	function previewImage1(event){
		html = '';
		
		for (var i = 0; i < event.target.files.length; i++) {
			src = URL.createObjectURL(event.target.files[i]);
			html += '<img src="'+src+'" width="50px;" class="mr-1 mb-1">';
		}
		document.getElementById('tyre_images_preview').innerHTML = html;
		console.log(html);
	}
</script>


@endsection