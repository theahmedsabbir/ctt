@extends('admin.template.master')

@section('content')


<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Edit Admin</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ Request::url() }}">Admin</a> / Edit
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
      <div class="row">
      	<div class="col-md-12">

            {{-- jodi request profile theke ashe tahole url different hobe for submit --}}
            <form action="{{ url('admin/profile/update/admin/'.$admin->id) }}" method="POST" enctype="multipart/form-data">

      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $admin->name ?? '' }}" class="form-control" placeholder="Admin name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{ $admin->phone ?? '' }}" class="form-control" placeholder="Admin phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $admin->email ?? '' }}" class="form-control" placeholder="Admin email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password <span class="text-danger">Leave this field empty if you dont want to update password</span></label>
                    <input type="checkbox" onchange="enablePassword(this)" id="enablePassword1"  style="cursor: pointer;"> <label for="enablePassword1" style="cursor: pointer;"> Click To Enable</label>
                    <input type="password" name="password" value="{{ '' }}" class="form-control" placeholder="Admin password" autocomplete="off" id="password" disabled>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif


                    {{-- script --}}     
					<script>
						function enablePassword(checkbox){
							if(checkbox.checked) document.querySelector('#password').removeAttribute('disabled')
							else document.querySelector('#password').setAttribute('disabled', 'true')
						}
					</script>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $admin->address ?? '' }}</textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
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




@endsection

@section('script')



@endsection

