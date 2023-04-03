@extends('frontend.dashlayout.dash')

@section('content') 

<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Enroll Details</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th class="product-thumbnail">Enroll Id</th>
            <th class="product-name">Trainer Name</th>
            <th class="product-price">Status </th>
            <th class="product-quantity"> Actions </th>
            <th class="product-total"> </th> 
           </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($enroll as $enroll)
          <tr>
            <td>{{ $enroll->id }}</td>
             @php
              $trainer = DB::table('trainer')->where('id',$enroll->trainer)->first();
              @endphp
              <td>{{ $trainer->name ?? "No Trainer" }}</td>
               @if ($enroll->status==0) 
                <td>pending </td>
                @else
                <td>approved</td>
                    @endif
                <td> 
                 @if ($enroll->admin ==1 && $enroll->payment ==0)
                 <a href="{{ route('payment', $enroll->id) }}"><button class="btn btn-success">Pay</button></a> 
                   @else
                 <button type="">cancel </button>
                @endif </td>
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
        <h3 class="page-title">Enroll Details</h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="product-thumbnail">Enroll Id</th>
                              <th class="product-name">Trainer Name</th>
                              <th class="product-price">Status </th>
                              <th class="product-quantity"> Actions </th>
                              {{-- <th class="product-total"> </th> --}}
                            {{-- </tr>
                          </thead>
                    
                          <tbody>
                            @foreach ($enroll as $enroll)
                            
                        <tr>
                          <td>{{ $enroll->id }}</td>
                          @php
                              $trainer = DB::table('trainer')->where('id',$enroll->trainer)->first();
                          @endphp
                          <td>{{ $trainer->name ?? "No Trainer" }}</td>
                          @if ($enroll->status==0) 
                          <td>pending </td>
                          @else
                          <td>approved</td>
                          @endif
                          <td> 
                          @if ($enroll->admin ==1 && $enroll->payment ==0)
                          <a href="{{ route('payment', $enroll->id) }}"><button class="btn btn-success">Pay</button></a> 
                            @else
                            <button type="">cancel </button>
                             @endif </td>
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