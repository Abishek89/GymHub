@extends('trainer.layout.main')

@section('content') 
<div class="main-panel">
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
                              <td>{{ $customer->name }}</td>
                              <td>{{ $enroll->created_at }}</td>
                              <td> {{ $customer->image }}</td>
                              <td> {{ $customer->DOB }}</td>  
                              <td> {{ $customer->weight }}</td>  
                              <td> {{ $customer->height }}</td>  
                            <td>
                                @if ($enroll->status==0)
                                    <button type="" class="btn btn-success">Approve</button>
                                @else

                                <button type="" class="btn btn-danger">Reject</a>
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
</div>
@endsection