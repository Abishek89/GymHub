@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Expenses Details</h3>
        <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-primary">Add Expenses</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Expenses Id </th>
                              <th> Expenses Name </th>
                              <th> Amount </th>
                              <th> Date </th>
                              <th> Expenses Type </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $expenses=DB::table('expenses')->get();
                        @endphp
                          <tbody>
                            @foreach ($expenses as $expenses ) 
                            <tr>
                              <td>{{ $expenses->id }}</td>
                              <td>{{ $expenses->expensesname }}</td>
                              <td> {{ $expenses->amount }} </td>
                              <td>  {{ $expenses->date }} </td>
                              <td>@if (
                                $expenses->expensestype==0)
                                Equipment
                                @elseif(
                                  $expenses->expensestype==1)
                                  Maintainence
                                @else
                                Others
                            @endif </td>
                            <td>
                                <a href="" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="" class="btn btn-primary">Delete</a> 
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>
</div>
@endsection