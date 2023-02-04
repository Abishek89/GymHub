@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Payment Details</h3>
        <a href="{{ url('/viewpayment/create') }}" class="btn btn-primary">Add Payment</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Payment Id </th>
                              <th> Payment Name </th>
                              <th> Amount </th>
                              <th> Payment Type </th>
                              <th> Payment By </th>
                              <th> updated_at </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $payment=DB::table('payment')->get();
                        @endphp
                          <tbody>
                            @foreach ($payment as $payment ) 
                            <tr>
                              <td>{{ $payment->id }}</td>
                              <td>{{ $payment->paymentname }}</td>
                              <td> {{ $payment->amount }} </td>
                              <td>@if (
                                $payment->paymenttype==0)
                                 Cash 
                            @else Online Money Transfer
                            @endif</td>
                              <td> {{ $payment->paymentby }} </td>
                              <td> Rs {{ $payment->updated_at }} </td>  
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