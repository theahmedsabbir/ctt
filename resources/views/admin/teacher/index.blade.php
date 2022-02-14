@extends('admin.template.master')

@section('content')
@if ($teacher['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Manage Faculty member</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Faculty /
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
              <th class="">Designation</th>
              <th class="">Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($teacher['data'] as $key => $teacher)
            <tr>
                <td class="">{{ $key+1 }}</td>
                <td class="">{{ $teacher->name ?? '' }}</td>
                <td class="">{{ $teacher->email ?? '' }}</td>
                <td class="">{{ $teacher->phone ?? '' }}</td>
                <td class="">{{ $teacher->teacher->designation ?? '' }}</td>
                <td class="">
                    <a href="{{ url('/admin/teacher/edit/'.$teacher->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('/admin/teacher/delete/'.$teacher->id) }}" onclick="return confirm('Are you sure delete this information?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endif
@if ($teacher['page'] == 'create')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Add faculty member</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/teacher/index') }}">Faculty member's</a> / Create
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
      		<form action="{{ url('admin/teacher/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class="form-control" placeholder="Teacher name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="" class="form-control" placeholder="Teacher phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Teacher email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="" class="form-control" placeholder="Teacher password" required>
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
                        @foreach ($teacher['department'] as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('department_id'))
                        <div class="text-danger">{{ $errors->first('department_id') }}</div>
                    @endif
                </div>
      			<div class="form-group">
      				<label for="">Designation</label>
      				<input type="text" name="designation" value="" class="form-control" placeholder="Designation" required>
	  				@if ($errors->has('designation'))
	  					<div class="text-danger">{{ $errors->first('designation') }}</div>
	  				@endif
      			</div>
                  <div class="form-group">
                    <label for="">As A</label>
                    <select class="form-control" name="type" id="type">
                        <option selected disabled>Select e Membar type</option>
                        <option value="chairmen">Chairmen</option>
                        <option value="principal">Principal</option>
                        <option value="vice-principal">Vice Principal</option>
                        <option value="teacher">Teacher</option>
                    </select>
                    @if ($errors->has('type'))
                        <div class="text-danger">{{ $errors->first('type') }}</div>
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
@if ($teacher['page'] == 'edit')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Edit Teacher</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/teacher/index') }}">Teachers</a> / Edit
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
      		<form action="{{ url('admin/teacher/update/'.$teacher['data']->id) }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $teacher['data']->name ?? '' }}" class="form-control" placeholder="Teacher name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{ $teacher['data']->phone ?? '' }}" class="form-control" placeholder="Teacher phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $teacher['data']->email ?? '' }}" class="form-control" placeholder="Teacher email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $teacher['data']->address ?? '' }}</textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
              <div class="form-group">
                  <label for="">Department</label>
                  <select class="form-control" name="department_id" id="department_id">
                      <option selected disabled>Select e department</option>
                      @foreach ($teacher['department'] as $department)
                          <option value="{{ $department->id }}" {{ $department->id == $teacher['data']->teacher->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('department_id'))
                      <div class="text-danger">{{ $errors->first('department_id') }}</div>
                  @endif
              </div>
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" name="designation" value="{{ $teacher['data']->teacher->designation }}" class="form-control" placeholder="Designation" required>
                    @if ($errors->has('designation'))
                        <div class="text-danger">{{ $errors->first('designation') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">As A</label>
                    <select class="form-control" name="type" id="type">
                        <option selected disabled>Select e Member type</option>
                        <option value="chairman" {{ $teacher['data']->teacher->type == 'chairmen' ? 'selected' : '' }}>Chairman</option>
                        <option value="principal" {{ $teacher['data']->teacher->type == 'principal' ? 'selected' : '' }}>Principal</option>
                        <option value="vice-principal" {{ $teacher['data']->teacher->type == 'vice-principal' ? 'selected' : '' }}>Vice Principal</option>
                        <option value="teacher" {{ $teacher['data']->teacher->type == 'teacher' ? 'selected' : '' }}>Teacher</option>
                    </select>
                    @if ($errors->has('type'))
                        <div class="text-danger">{{ $errors->first('type') }}</div>
                    @endif
                </div>
                <div class="form-group">
                  <label for="">Joining date</label>
                  <input type="date" name="joining_date" value="{{Carbon\Carbon::parse($teacher['data']->teacher->joining_date)->toDateString()}}" class="form-control" placeholder="joining date" required>
                  @if ($errors->has('joining_date'))
                      <div class="text-danger">{{ $errors->first('joining_date') }}</div>
                  @endif
              </div>
              <div class="form-group">
                  <label for="">Salary</label>
                  <input type="text" name="salary" value="{{ $teacher['data']->teacher->salary }}" class="form-control" placeholder="salary : 99999" required>
                  @if ($errors->has('salary'))
                      <div class="text-danger">{{ $errors->first('salary') }}</div>
                  @endif
              </div>
              <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" value="" class="form-control" />
                @if ($teacher['data']->avatar != null)
                    <img src="{{ asset('avatar/'.$teacher['data']->avatar) }}" height="100" width="100"/>
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
