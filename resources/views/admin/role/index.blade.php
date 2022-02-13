@extends('admin.template.master')

@section('content')

      @include('admin.role.header', ['page' => 'Manage'])



      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <div class="table-wrapper table-responsive">
            <table id="datatable3" class="table display nowrap">
              <thead>
                <tr>
                  <th class="">#</th>
                  <th class="text-capitalize">role</th>
                  <th class="text-capitalize">permissions</th>
                  <th class="">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\Models\Role::orderBy('id', 'asc')->get() as $key=>$role)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $role->role }}</td>
                  @php
                    $permissions_html = '';
                    if ($role->permissions != null) {
                      foreach (json_decode($role->permissions) as $permission) {
                        $permissions_html .= $permission . '<br>';
                      }
                      
                    }
                  @endphp

                  <td>{!! $role->permissions == null ? 'all' : $permissions_html !!}</td>
                  <td>
                    @if ($role->role != 'admin')
                        
                      <a class="btn btn-teal btn-sm text-white"  data-toggle="modal" data-target="#role{{ $role->id }}"><i data-toggle="tooltip-info" data-placement="top" title="Edit" class="fa fa-pen" ></i></a>



                      <!-- Modal -->
                      <div class="modal fade" id="role{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit {{$role->role}} permissions</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{ url('admin/role/update/' . $role->id) }}" method="POST">
                              @csrf
                              
                              <div class="modal-body">
                                
                                <table class="table">
                                  <thead class="thead-light">
                                    <tr>
                                      <th scope="col">Roles</th>
                                      <th scope="col">Set Permission</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td style="text-transform: capitalize;">department</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('department', json_decode($role->permissions)) ? 'checked': '' }} value="department" style="cursor: pointer;"></td>
                                    </tr>
                                    <tr>
                                      <td style="text-transform: capitalize;">teacher</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('teacher', json_decode($role->permissions)) ? 'checked': '' }} value="teacher" style="cursor: pointer;"></td>
                                    </tr>
                                    <tr>
                                      <td style="text-transform: capitalize;">stuff</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('stuff', json_decode($role->permissions)) ? 'checked': '' }} value="stuff" style="cursor: pointer;"></td>
                                    </tr>
                                    <tr>
                                      <td style="text-transform: capitalize;">student</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('student', json_decode($role->permissions)) ? 'checked': '' }} value="student" style="cursor: pointer;"></td>
                                    </tr>
                                    <tr>
                                      <td style="text-transform: capitalize;">post</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('post', json_decode($role->permissions)) ? 'checked': '' }} value="post" style="cursor: pointer;"></td>
                                    </tr>
                                    <tr>
                                      <td style="text-transform: capitalize;">accounts</td>
                                      <td><input type="checkbox" name="permissions[]" {{ in_array('account', json_decode($role->permissions)) ? 'checked': '' }} value="account" style="cursor: pointer;"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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



