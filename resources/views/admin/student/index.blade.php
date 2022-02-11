@extends('admin.template.master')

@section('content')
@if ($student['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Manage Student</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Students /
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
              <th class="">Department</th>
              <th class="">Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($student['data'] as $key => $student)
            <tr>
                <td class="">{{ $key+1 }}</td>
                <td class="">{{ $student->name ?? '' }}</td>
                <td class="">{{ $student->email ?? '' }}</td>
                <td class="">{{ $student->phone ?? '' }}</td>
                <td class="">{{ $student->student->department->name ?? '' }}</td>
                <td class="">
                    <a href="{{ url('/admin/student/edit/'.$student->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('/admin/student/delete/'.$student->id) }}" onclick="return confirm('Are you sure delete this information?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endif
@if ($student['page'] == 'create')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Add Student</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/student/index') }}">Students</a> / Create
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
      		<form action="{{ url('admin/student/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class="form-control" placeholder="Student name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="" class="form-control" placeholder="Student phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Student email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="" class="form-control" placeholder="Student password" required>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
              <div class="form-group">
                  <label for="">Department</label>
                  <select class="form-control" name="department_id" id="department_id">
                      <option selected disabled>Select e department</option>
                      @foreach ($student['department'] as $department)
                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('department_id'))
                      <div class="text-danger">{{ $errors->first('department_id') }}</div>
                  @endif
              </div>
                <div class="form-group">
                    <label for="">Roll</label>
                    <input type="number" name="roll" value="" class="form-control" placeholder="Roll..." required>
                    @if ($errors->has('roll'))
                        <div class="text-danger">{{ $errors->first('roll') }}</div>
                    @endif
                </div>
              <div class="form-group">
                  <label for="">Shift</label>
                  <input type="text" name="shift" value="" class="form-control" placeholder="Shift..." required>
                  @if ($errors->has('shift'))
                      <div class="text-danger">{{ $errors->first('shift') }}</div>
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
@if ($student['page'] == 'edit')
<div class="br-pagetitle">
	<i class="icon ion-ios-list-outline"></i>
	<div>
	  <h4>Edit Student</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/student/index') }}">Students</a> / Edit
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
      		<form action="{{ url('admin/student/update/'.$student['data']->id) }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $student['data']->name ?? '' }}" class="form-control" placeholder="Student name" required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="{{ $student['data']->phone ?? '' }}" class="form-control" placeholder="Student phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $student['data']->email ?? '' }}" class="form-control" placeholder="Student email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $student['data']->address ?? '' }}</textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
              <div class="form-group">
                  <label for="">Department</label>
                  <select class="form-control" name="department_id" id="department_id">
                      <option selected disabled>Select e department</option>
                      @foreach ($student['department'] as $department)
                          <option value="{{ $department->id }}" {{ $department->id == $student['data']->student->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('department_id'))
                      <div class="text-danger">{{ $errors->first('department_id') }}</div>
                  @endif
              </div>
                <div class="form-group">
                    <label for="">Roll</label>
                    <input type="number" name="roll" value="{{ $student['data']->student->roll }}" class="form-control" placeholder="Roll.." required>
                    @if ($errors->has('roll'))
                        <div class="text-danger">{{ $errors->first('roll') }}</div>
                    @endif
                </div>
              <div class="form-group">
                  <label for="">Shift</label>
                  <input type="text" name="shift" value="{{ $student['data']->student->shift }}" class="form-control" placeholder="Shift..." required>
                  @if ($errors->has('shift'))
                      <div class="text-danger">{{ $errors->first('shift') }}</div>
                  @endif
              </div>
              <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" value="" class="form-control" />
                @if ($student['data']->avatar != null)
                    <img src="{{ asset('avatar/'.$student['data']->avatar) }}" height="100" width="100"/>
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
