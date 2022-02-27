@extends('admin.template.master')

@section('content')
@if ($stuff['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Manage Stuff</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Stuff /
	  </p>
	</div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="table-wrapper table-responsive">
        <table id="datatable3" class="table display nowrap">
          <thead>
            <tr>
              <th class="">#</th>
              <th class="">Name</th>
              <th class="">Email</th>
              <th class="">Phone</th>
              <th class="">Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($stuff['data'] as $key => $stuff)
            <tr>

                  <td class="">{{ $key+1 }}</td>
                  <td class="">{{ $stuff->name ?? '' }}</td>
                  <td class="">{{ $stuff->email ?? '' }}</td>
                  <td class="">{{ $stuff->phone ?? '' }}</td>
                  <td class="">
                    @if (Session::get('admin_role') == 'admin' || Session::get('admin_role') == 'stuff')
                      <a href="{{ url('/admin/stuff/edit/'.$stuff->id) }}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{ url('/admin/stuff/delete/'.$stuff->id) }}" onclick="return confirm('Are you sure delete this information?')" class="btn btn-sm btn-danger">Delete</a>
                    @endif
                  </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endif
@if ($stuff['page'] == 'create')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Add stuff</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/stuff/index') }}">Stuffs</a> / Create
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
      		<form action="{{ url('admin/stuff/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class="form-control" placeholder="Stuff name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="" class="form-control" placeholder="Stuff phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Stuff email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="" class="form-control" placeholder="Stuff password" required>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" id="address" cols="30" rows="10"></textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select class="form-control" name="department_id" id="department_id">
                        <option selected disabled>Select e department</option>
                        @foreach ($stuff['department'] as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('department_id'))
                        <div class="text-danger">{{ $errors->first('department_id') }}</div>
                    @endif
                </div>
                  <div class="form-group">
                    <label for="">Joining date</label>
                    <input type="date" name="joining_date" value="" class="form-control" placeholder="joining date" required>
                    @if ($errors->has('joining_date'))
                        <div class="text-danger">{{ $errors->first('joining_date') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="text" name="salary" value="" class="form-control" placeholder="salary : 99999" required>
                    @if ($errors->has('salary'))
                        <div class="text-danger">{{ $errors->first('salary') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar" value="" class="form-control" />
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
@endif
@if ($stuff['page'] == 'edit')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Edit Stuff</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/stuff/index') }}">Stuff</a> / Edit
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
            @if (isset($stuff['form']) && $stuff['form'] == 'profile_edit')

              <form action="{{ url('admin/profile/update/stuff/'.$stuff['data']->id) }}" method="POST" enctype="multipart/form-data">            
            
            @else
            
              <form action="{{ url('admin/stuff/update/'.$stuff['data']->id) }}" method="POST" enctype="multipart/form-data">

            @endif
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $stuff['data']->name ?? '' }}" class="form-control" placeholder="Teacher name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{ $stuff['data']->phone ?? '' }}" class="form-control" placeholder="Teacher phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $stuff['data']->email ?? '' }}" class="form-control" placeholder="Teacher email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>               


                <div class="form-group">
                    <label for="">Password <span class="text-danger">Leave this field empty if you dont want to update password</span></label>
                    <input type="checkbox" onchange="enablePassword(this)" id="enablePassword1"  style="cursor: pointer;"> <label for="enablePassword1" style="cursor: pointer;"> Click To Enable</label>
                    <input type="password" name="password" value="{{ '' }}" class="form-control" placeholder="Password" autocomplete="off" id="password" disabled>
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
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $stuff['data']->address ?? '' }}</textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select class="form-control" name="department_id" id="department_id">
                        <option selected disabled>Select e department</option>
                        @foreach ($stuff['department'] as $department)
                            <option value="{{ $department->id }}" {{ $department->id == $stuff['data']->teacher->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('department_id'))
                        <div class="text-danger">{{ $errors->first('department_id') }}</div>
                    @endif
                </div>
                <div class="form-group">
                  <label for="">Joining date</label>
                  <input type="date" name="joining_date" value="{{Carbon\Carbon::parse($stuff['data']->teacher->joining_date)->toDateString()}}" class="form-control" placeholder="joining date" required>
                  @if ($errors->has('joining_date'))
                      <div class="text-danger">{{ $errors->first('joining_date') }}</div>
                  @endif
              </div>
              <div class="form-group">
                  <label for="">Salary</label>
                  <input type="text" name="salary" value="{{ $stuff['data']->teacher->salary }}" class="form-control" placeholder="salary : 99999" required>
                  @if ($errors->has('salary'))
                      <div class="text-danger">{{ $errors->first('salary') }}</div>
                  @endif
              </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar" value="" class="form-control" />
                    @if ($stuff['data']->avatar != null)
                        <img src="{{ asset('avatar/'.$stuff['data']->avatar) }}" height="100" width="100"/>
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
@endif
@endsection
