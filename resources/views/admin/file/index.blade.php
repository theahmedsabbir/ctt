@extends('admin.template.master')

@section('content')

      @include('admin.file.header', ['page' => 'Manage'])



      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <div class="table-wrapper table-responsive">
            <table id="datatable3" class="table display nowrap">
              <thead>
                <tr>
                  <th class="">#</th>
                  <th class="text-capitalize">type</th>
                  <th class="text-capitalize">title</th>
                  <th class="text-capitalize">image</th>
                  <th class="text-capitalize">file</th>
                  <th class="text-capitalize">link</th>
                  <th class="">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\Models\File::orderBy('type', 'asc')->get() as $file)

                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $file->type }}</td>
                  <td>{{ $file->title }}</td>
                  <td><a href="{{ asset('post/' . $file->image ) }}" target="_blank">{{ $file->image }}</a></td>
                  <td><a href="{{ asset('post/' . $file->file ) }}" target="_blank">{{ $file->file }}</a></td>
                  <td>{{ $file->link }}</td>
                  <td>

                    @if (Session::get('admin_role') == 'admin' || Session::get('admin_role') == 'stuff')
                    <a href="{{ url('admin/post/edit', $file->id) }}" class="btn btn-teal btn-sm" data-toggle="tooltip-info" data-placement="top" title="Edit"><i class="fa fa-pen" ></i></a>
                    <form action="{{ url('admin/post/delete', $file->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?')">
                      @csrf                      
                      <button class="btn btn-danger btn-sm d-inline" data-toggle="tooltip-info" data-placement="top" title="Delete"><i class="fa fa-trash-alt" ></i></button>
                    </form>
                    @endif
                    
                  </td>
                </tr>
                @endforeach 
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->


@endsection



