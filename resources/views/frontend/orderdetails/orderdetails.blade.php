@extends('frontend.dashlayout.dash')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Order Details</h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="product-thumbnail">Order Id</th>
                              <th class="product-name">order by</th>
                              <th class="product-price">items </th>
                              <th class="product-price">Status</th>
                              <th class="product-quantity"> Payment </th>
                              <th class="product-total">Cancel </th>
                              <th class="product-total">Ordered date </th>
                            </tr>
                          </thead>
                    
                          <tbody>
                            
                        @foreach ($order as $order)
                          
                        
                        <tr>
                          <td>{{ $order->id }}</td>
                          
                          <td>{{ $order->firstname }} {{ $order->lastame }}</td>
                         
                          <td>  <a href="{{ route('user.ordereditem',$order->id) }}" class="btn btn-danger">Items</a></td>
                          <td>@if ($order->status == 0)
                            pending
                            @else
                            shipped
                          @endif</td>
                          <td>@if ($order->payment == false)
                            unpaid
                            @else
                            paid
                          @endif</td>
                          
                          <td><button type="submit" class="btn btn-danger">cancel</button> </td>
                          <td>{{ $order->created_at }} </td>
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