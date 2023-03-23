@extends('admin.layout.main')

@section('content') 

<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Enquiry</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <th> Member Id </th>
          <th> Member Name </th>
          <th> Member since </th>
          <th> Image </th>
          <th> Age </th>
          <th> Height </th>
          <th> Weight </th>
          <th> Action </th>
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
            <td> {{ $customer->weight }}</td>  
            <td> {{ $customer->height }}</td>  
          <td>
              <form action="{{ route('admin.approveenroll') }}" method="post">
                @csrf
                <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                  <button type="submit" class="btn btn-primary">Approve</button>
              </form>
          </td>
          <td>
              <form action="{{ route('admin.rejectenroll') }}" method="post">
                @csrf
                
                <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                  <button type="submit" class="btn btn-danger">Reject</button>
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
  <!--/ Basic Bootstrap Table -->
<!--/ Basic Bootstrap Table -->
{{-- <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Members Details</h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Member Id </th>
                              <th> Member Name </th>
                              <th> Member since </th>
                              <th> Image </th>
                              <th> Age </th>
                              <th> Height </th>
                              <th> Weight </th>
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($enroll as $enroll)
                             
                            <tr>
                               @php
                                   $customer = DB::table('customers')->where('userid',$enroll->user)->first();
                               @endphp
                              <td>{{ $customer->id }}</td>
                              <td>{{ $customer->name }}</td>
                              <td>{{ $enroll->created_at }}</td>
                              <td> {{ $customer->image }}</td>
                              <td> {{ $customer->DOB }}</td>  
                              <td> {{ $customer->weight }}</td>  
                              <td> {{ $customer->height }}</td>  
                            <td>
                                <form action="{{ route('admin.approveenroll') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>

                                <form action="{{ route('admin.rejectenroll') }}" method="post">
                                  @csrf
                                  
                                  <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                                
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