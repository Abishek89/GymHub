@extends('trainer.layout.main')

@section('content') 
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/trainer/member') }}">All Members</a>
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
                      <td><a href="{{ route('dietplan',$enroll->id) }}">{{ $customer->name }}</a></td>
                      <td>{{ $enroll->created_at }}</td>
                      <td> {{ $customer->image }}</td>
                      <td> {{ $customer->DOB }}</td>  
                      <td> {{ $customer->weight }}</td>  
                      <td> {{ $customer->height }}</td>  
                      <td>
                        @if ($enroll->status != 1)
                        <form action="{{ route('approveenroll') }}" method="post">
                        @csrf
                      <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                      <button type="submit" class="btn btn-success">Approve</button>
                      </form>
                      @endif
                      @if ($enroll->payment==0 && $enroll->status != 2)
                      <form action="{{ route('rejectenroll') }}" method="post">
                        @csrf
                      <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                    <button type="submit" class="btn btn-danger">Reject</a>
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
{{-- <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Payment Details</h3>
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
                              <td><a href="{{ route('dietplan',$enroll->id) }}">{{ $customer->name }}</a></td>
                              <td>{{ $enroll->created_at }}</td>
                              <td> {{ $customer->image }}</td>
                              <td> {{ $customer->DOB }}</td>  
                              <td> {{ $customer->weight }}</td>  
                              <td> {{ $customer->height }}</td>  
                            <td>
                                @if ($enroll->status != 1)
                                <form action="{{ route('approveenroll') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                                @endif
                                @if ($enroll->payment==0 && $enroll->status != 2)
                                <form action="{{ route('rejectenroll') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                                  <button type="submit" class="btn btn-danger">Reject</a>
                                </form>
                                @endif
                                
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