
@extends('admin.layout.main')

@section('content') 

<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">          
  
<!-- Basic Bootstrap Table -->
<div class="card">
  <nav class="navbar navbar-expand-lg bg-navbar-theme">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('members') }}">All Members</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-ex-5">
        <div class="navbar-nav me-auto">
        </div>
        <form class="d-flex" action="">
          @csrf
          <div class="input-group">
            <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
            <input type="text" class="form-control" placeholder="Search..." name="search"/>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th> Member Id </th>
          <th> Member Name </th>
          <th> Member since </th>
          <th> Image </th>
          <th> Age </th>
          <th>Status</th>
          <th> Height </th>
          <th> Weight </th>
          <th> Action </th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($enroll as $enroll)
        <tr>
          @php
            $customer = DB::table('customers')->where('userid',$enroll->user)->first();
          @endphp
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td>{{ $enroll->created_at }}</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{ URL::to('uploads/customers/'.$customer->image) }}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td> {{ $customer->DOB }}</td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>  
          <td> {{ $customer->weight }}</td>  
          <td> {{ $customer->height }}</td> 
          <td>
            @if ($enroll->payment == 0)
            <form action="{{ route('admin.rejectenroll') }}" method="post">
              @csrf
              <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                <button type="submit" class="btn btn-danger">Reject</button>
            </form>
            @endif      
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection