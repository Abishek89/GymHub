@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/viewexpenses') }}">Expenses</a>
        {{-- <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-primary">Add Expenses</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbar-ex-5">
          <div class="navbar-nav me-auto">
          </div>
          <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-danger">Add Expenses</a>
        </div>
      </div>
    </nav>
    {{-- <h3 class="page-title">Expenses Details</h3>
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-primary">Add Expenses</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav> --}}
    <div class="table-responsive text-nowrap">
      <table class="table">
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
        <tbody class="table-border-bottom-0">
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
              <a href="{{ route('editexpenses', ['id' => $expenses->id])}}" class="btn btn-primary">Update</a>
              </td>
              <td> 
              <a href="{{ route('deleteexpenses', ['id' => $expenses->id])}}" class="btn btn-primary">Delete</a> 
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
{{-- <div class="main-panel">
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
                                <a href="{{ route('editexpenses', ['id' => $expenses->id])}}" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="{{ route('deleteexpenses', ['id' => $expenses->id])}}" class="btn btn-primary">Delete</a> 
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
</div> --}}
@endsection