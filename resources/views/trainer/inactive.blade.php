@extends('trainer.layout.main')

@section('content') 
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Inactive Members Details</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th> Member Id </th>
            <th> Member Name </th>
            <th> Member since </th>
            <th> Image </th>
            <th> Age </th>
            <th> Status </th>
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