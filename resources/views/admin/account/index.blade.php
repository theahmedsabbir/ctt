@extends('admin.template.master')

@section('content')

      @include('admin.account.header', ['page' => 'Manage'])



      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <div class="table-wrapper table-responsive">
            <table id="datatable3" class="table display nowrap">
              <thead>
                <tr>
                  <th class="">#</th>
                  <th class="text-capitalize">date</th>
                  <th class="text-capitalize">student</th>
                  <th class="text-capitalize">semester</th>
                  <th class="text-capitalize">total</th>
                  <th class="text-capitalize">paid</th>
                  <th class="text-capitalize">due</th>
                  <th class="">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $total_total = 0;
                  $total_paid = 0;
                  $total_due = 0;
                @endphp
                @foreach (App\Models\Account::orderBy('id', 'asc')->get() as $account)

                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $account->updated_at->format('d-m-Y') }}</td>
                  <td>{{ $account->student ? $account->student->name : '' }}</td>
                  <td>{{ $account->semester }}</td>
                  <td>{{ $account->total }}</td>
                  <td>{{ $account->paid }}</td>
                  <td>{{ $account->due }}</td>
                  <td>
                    <a href="{{ url('admin/account/edit', $account->id) }}" class="btn btn-teal btn-sm" data-toggle="tooltip-info" data-placement="top" title="Edit"><i class="fa fa-pen" ></i></a>
                    <form action="{{ url('admin/account/delete', $account->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?')">
                      @csrf                      
                      <button class="btn btn-danger btn-sm d-inline" data-toggle="tooltip-info" data-placement="top" title="Delete"><i class="fa fa-trash-alt" ></i></button>
                    </form>
                  </td>
                </tr>

                @php
                  $total_total += $account->total ;
                  $total_paid += $account->paid ;
                  $total_due += $account->due ;
                @endphp
                @endforeach 
              </tbody>
              <tfoot>
                <tr>
                  <th class=""></th>
                  <th class="text-capitalize"></th>
                  <th class="text-capitalize"></th>
                  <th class="text-capitalize">Total</th>
                  <th class="text-capitalize">{{$total_total}}</th>
                  <th class="text-capitalize">{{$total_paid}}</th>
                  <th class="text-capitalize">{{$total_due}}</th>
                  <th class=""></th>
                </tr>                
              </tfoot>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->


@endsection



