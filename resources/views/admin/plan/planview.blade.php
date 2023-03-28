@extends('admin.layout.main')

@section('content') 
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <h5 class="card-header">Available Plan</h5>
    <a href="{{ url('/planview/createplan') }}" class="btn btn-primary">Add Plan</a> --}}
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/planview') }}">Plan Details</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbar-ex-5">
          <div class="navbar-nav me-auto">
          </div>
          <a href="{{ url('/planview/createplan') }}" class="btn btn-danger">Add Plan</a>
        </div>
      </div>
    </nav>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th> Plan Id </th>
            <th> Plan Name </th>
            <th> Package </th>
            <th> Price </th>
            <th> Refundable </th>
            <th> Admission </th>
            <th> Update </th>
            <th> Delete </th>
          </tr>
        </thead>
        @php
        $plan=DB::table('plan')->get();
        @endphp
        <tbody class="table-border-bottom-0">
                             
          <tr>
            @foreach ($plan as $plan ) 
            <tr>
              <td>{{ $plan->id }}</td>
              <td>{{ $plan->planname }}</td>
              <td>@if (
                $plan->package==0)
                Monthly Packages
                @elseif(
                  $plan->package==1)
                  Annual Packages
                @else
                Life Time Membership
            @endif </td>
              <td> Rs {{ $plan->price }} </td>
              <td>@if (
                $plan->refundable==1)
                ✅
                @else ❌
            @endif </td>
              <td> @if (
                $plan->admission==1)
                ✅
            @else ❌
            @endif</td>
            <td>
                <a href="{{ route('editplan', ['id' => $plan->id])}}" class="btn btn-primary">Update</a>
            </td>
            <td> 
              <a href="{{ route('deleteplan', ['id' => $plan->id])}}" class="btn btn-primary">Delete</a> 
            </td>
            </tr>
            @endforeach
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
  </div>
  
  <!--/ Basic Bootstrap Table -->
@endsection 