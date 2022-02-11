@extends('admin.template.master')

@section('content')

@include('admin.file.header', ['page' => 'Edit'])


<div class="br-pagebody">
    <div class="br-section-wrapper">
    	
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{ url('admin/post/update', $file->id) }}" method="POST" enctype="multipart/form-data">
      			@csrf  

	            <div class="form-group">
	                <label for="type" class="text-capitalize">type</label>
	                
	                <select name="type" value="{{ $file->type }}" class="form-control text-capitalize" required>
	                    <option value="notice" {{ $file->type == 'notice' ? 'selected' : '' }} class="text-capitalize">notice</option>
	                    <option value="calendar" {{ $file->type == 'calendar' ? 'selected' : '' }} class="text-capitalize">calendar</option>
	                    <option value="class-routine" {{ $file->type == 'class-routine' ? 'selected' : '' }} class="text-capitalize">class-routine</option>
	                    <option value="exam-routine" {{ $file->type == 'exam-routine' ? 'selected' : '' }} class="text-capitalize">exam-routine</option>
	                    <option value="public-exam-result" {{ $file->type == 'public-exam-result' ? 'selected' : '' }} class="text-capitalize">public-exam-result</option>
	                    <option value="institutional-result" {{ $file->type == 'institutional-result' ? 'selected' : '' }} class="text-capitalize">institutional-result</option>
	                    <option value="course-structure" {{ $file->type == 'course-structure' ? 'selected' : '' }} class="text-capitalize">course-structure</option>
	                    <option value="admission-circular" class="text-capitalize">admission-circular</option>
<option value="admission-form" class="text-capitalize">admission-form</option>
<option value="admission-requirement" class="text-capitalize">admission-requirement</option>
<option value="prospectus" class="text-capitalize">prospectus</option>
<option value="fee" class="text-capitalize">fee</option>
	                </select>
	            </div>

      			<div class="form-group">
      				<label for="">title</label>
      				<input type="text" name="title" value="{{ $file->title }}" value="" class="form-control" required>

	  				@if ($errors->has('title'))
	  					<div class="text-danger">{{ $errors->first('title') }}</div>
	  				@endif
      			</div>



				<div class="form-group">
					<label for="">image</label>
					<input type="file" name="image" value="{{ $file->image }}" class="form-control-file" onchange="return previewImage(event,'image')">

					@if ($errors->has('image'))
						<div class="text-danger">{{ $errors->first('image') }}</div>
					@endif

					<img id="image" width="50px" class="mt-2">
				</div> 



				<div class="form-group">
					<label for="">file</label>
					<input type="file" name="file" value="{{ $file->file }}" class="form-control-file" onchange="return previewImage(event,'file')">

					@if ($errors->has('file'))
						<div class="text-danger">{{ $errors->first('file') }}</div>
					@endif

					<img id="file" width="50px" class="mt-2">
				</div> 


      			<div class="form-group">
      				<label for="">link</label>
      				<input type="url" name="link" value="{{ $file->link }}" value="" class="form-control">

	  				@if ($errors->has('link'))
	  					<div class="text-danger">{{ $errors->first('link') }}</div>
	  				@endif
      			</div>


      			<div class="form-group">
	                <label for="description" class="text-capitalize">description</label>
	                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $file->description }}</textarea>
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
	function previewImage(event,output_id){
		var output = document.getElementById(output_id);
		output.src = URL.createObjectURL(event.target.files[0]);
		console.log(output.src);
	}
</script>
@endsection