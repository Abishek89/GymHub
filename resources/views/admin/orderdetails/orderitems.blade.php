@extends('admin.layout.main')

@section('content')
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            

    <div class="row invoice-preview">
      <!-- Invoice -->
      <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
        <div class="card invoice-preview-card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
              <div class="mb-xl-0 mb-4">
                <div class="d-flex svg-illustration mb-3 gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">GymHub</span>
                </div>
                <p class="mb-1">gymhub@gmail.com</p>
                <p class="mb-1">SundarHaraincha-4, Morang</p>
                <p class="mb-0">+977-9819368669</p>
              </div>
              <div>
                <h4>Ordered Items Details</h4>
                <div class="mb-2">
                  <span class="me-1">Ordered Date:</span>
                  <span class="fw-semibold">{{ $order->created_at }}</span>
                </div>
                <form action="{{ route('admin.ship') }}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" value="{{ $order->id }}" name="id">
                    <button type="submit" class="btn btn-danger">ship</button></form> 
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body">
            <div class="row p-sm-3 p-0">
              <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                <h6 class="pb-2">Ordered By:</h6>
                <p class="mb-1">{{ $order->firstname }} {{ $order->lastame }}</p>
                <p class="mb-1">{{ $order->email }}</p>
                <p class="mb-1">{{ $order->phone }}</p>
              </div>
              <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                <h6 class="pb-2">Address:</h6>
                <table>
                  <tbody>
                    <tr>
                      <td class="pe-3">Country:</td>
                      <td>{{ $order->country }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Provience:</td>
                      <td>{{ $order->provience }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">City:</td>
                      <td>{{ $order->city }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Ward No:</td>
                      <td>{{$order->ward}}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Apartment No:</td>
                      <td>{{ $order->Apartmentno }}</td>
                    </tr>
                    <tr>
                        <td class="pe-3">Address:</td>
                        <td>{{ $order->address }}</td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table border-top m-0">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Product Cost</th>
                  <th>Ordered Quantity</th>
                  <th>Total Price</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($item as $item)
                @php
                    $product = DB::table('products')->where('id',$item->product_id)->first();
                @endphp
                <tr>
                  <td class="text-nowrap">{{ $product->productname}}</td>
                  <td class="text-nowrap">
                    <ul class="list-unstyled users-list m-q avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;                   <img src="{{ URL::to('/uploads/products/'.$product->image) }}" alt="Avatar" class="rounded-circle">
                        </li>
                      </ul>
                  </td>
                  <td>Rs {{ $product->price }}</td>
                  <td>{{ $item->quantity }}</td>
                  <td>Rs {{ $item->price }}</td>
                </tr>
                <tr>
                  <td colspan="3" class="align-top px-4 py-5">
                    <p class="mb-2">
                      <span class="me-1 fw-semibold">Sales By:</span>
                      <span>GymHub</span>
                    </p>
                    <span>We only support Cash on Delivery for the Users convienence :)</span>
                    <br>
                    <span>Thanks for your business :)</span>
                  </td>
                  <td class="text-end px-4 py-5">
                    <p class="mb-2">Subtotal:</p>
                    <p class="mb-0">Total:</p>
                  </td>
                  <td class="px-4 py-5">
                    <p class="fw-semibold mb-2">$154.25</p>
                    <p class="fw-semibold mb-0">$204.25</p>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <span class="fw-semibold">Note:</span>
                <span>It was a pleasure working with you. We hope you will keep us in mind for future. Thank You!</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Invoice -->
    
    
    <!-- /Offcanvas -->
    
    
                
              </div>
              <!-- / Content -->
              @endsection