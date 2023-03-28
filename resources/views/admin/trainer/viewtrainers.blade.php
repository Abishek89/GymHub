@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/viewtrainers') }}">Trainers</a>
        {{-- <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-primary">Add Expenses</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbar-ex-5">
          <div class="navbar-nav me-auto">
          </div>
          <a href="{{ url('/viewtrainers/addtrainers') }}" class="btn btn-danger">Add New Trainers</a>
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
            <th> Trainer Id </th>
            <th> Trainer Name </th>
            <th> Delete </th>
          </tr>
        </thead>
        @php
        $users=DB::table('users')->where('role',2)->get();
         @endphp
        <tbody class="table-border-bottom-0">
          @foreach ($users as $users ) 
          <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
          <td> 
            <a href="{{ route('deletetrainer', ['id' => $users->id])}}" class="btn btn-primary">Delete</a> 
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
        <h3 class="page-title">Available Trainer</h3>
        <a href="{{ url('/viewtrainers/addtrainers') }}" class="btn btn-primary">Add New Trainers</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Trainer Id </th>
                              <th> Trainer Name </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $users=DB::table('users')->where('role',2)->get();
                        @endphp
                          <tbody>
                            @foreach ($users as $users ) 
                            <tr>
                              <td>{{ $users->id }}</td>
                              <td>{{ $users->name }}</td>
                            <td>
                                <a href="{{ route('edittrainer', ['id' => $users->id])}}" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="{{ route('deletetrainer', ['id' => $users->id])}}" class="btn btn-primary">Delete</a> 
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