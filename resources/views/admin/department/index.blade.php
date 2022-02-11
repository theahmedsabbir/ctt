@extends('admin.template.master')

@section('content')
@if ($department['page'] == 'index')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Manage Department</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ Department /
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
              <th class="">Image</th>
              <th class="">Name</th>
              <th class="">Description</th>
              <th class="">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($department['data'] as $department)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>
                        <img src="{{ asset('department/'.$department->image) }}" height="50" width="100" />
                    </td>
                    <td>{{ $department->name }}</td>
                    <td>
                        {{ Str::substr($department->description, 0, 35) }}
                    </td>
                    <td>
                        <a href="{{ url('/admin/department/edit/'.$department->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('/admin/department/delete/'.$department->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div><!-- table-wrapper -->

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endif
@if ($department['page'] == 'create')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Create Department</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/department/index') }}">Departments</a> / Create
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
      		<form action="{{ url('admin/department/store') }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="" class="form-control" placeholder="Department name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description"  id="summernote"  rows="5" placeholder="Descrioption..."></textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" value="" class="form-control" required>
                    @if ($errors->has('image'))
                        <div class="text-danger">{{ $errors->first('image') }}</div>
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
@if ($department['page'] == 'edit')
<div class="br-pagetitle">
	<i class="icon ion-android-list"></i>
	<div>
	  <h4>Edit Department</h4>
	  <p class="mg-b-0">
	  	<a href="{{ url('admin/dashboard') }}">Dashboard</a>
	  	/ <a href="{{ url('admin/department/index') }}">Departments</a> / Edit
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
      		<form action="{{ url('admin/department/update/'.$department['data']->id) }}" method="POST" enctype="multipart/form-data">
      			@csrf
      			<div class="form-group">
      				<label for="">Name</label>
      				<input type="text" name="name" value="{{ $department['data']->name }}" class="form-control" placeholder="Department name" required>
	  				@if ($errors->has('name'))
	  					<div class="text-danger">{{ $errors->first('name') }}</div>
	  				@endif
      			</div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description"  id="summernote" rows="5" placeholder="Descrioption...">{{ $department['data']->description }}</textarea>
                    @if ($errors->has('description'))
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" value="" class="form-control" />
                    <img src="{{ asset('department/'.$department['data']->image) }}" height="50" width="100" />
                    @if ($errors->has('image'))
                        <div class="text-danger">{{ $errors->first('image') }}</div>
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
