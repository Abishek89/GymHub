<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GymHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="/shopbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shopbootstrap/css/magnific-popup.css">
    <link rel="stylesheet" href="/shopbootstrap/css/jquery-ui.css">
    <link rel="stylesheet" href="/shopbootstrap/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/shopbootstrap/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="/shopbootstrap/css/aos.css">

    <link rel="stylesheet" href="/shopbootstrap/css/style.css">
    
  </head>
  <body>
  
    @extends('frontend.layout.main')

    @section('content')
        <section class="shop-section spad">
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                  <h2 class="h3 mb-3 text-black">Billing Details</h2>
                  <form action="{{ route('add.checkout') }}" method="POST">
                    @csrf
                  <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                      <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                      <select id="c_country" class="form-control" name="country">
                        <option value=" Nepal">Nepal</option>    
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="c_country" class="text-black">Provience <span class="text-danger">*</span></label>
                      <select id="c_country" class="form-control" name="provience">   
                        <option value="Provience no 1">Provience no 1</option> 
                      </select>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_fname" name="fname" required>
                      </div>
                      <div class="col-md-6">
                        <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_lname" name="lname">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_state_country" class="text-black">City <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_state_country" name="city">
                      </div>
                      <div class="col-md-6">
                        <label for="c_postal_zip" class="text-black">Ward No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_postal_zip" name="ward">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_state_country" class="text-black">Apartment No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_state_country" name="appartment">
                      </div>
                      <div class="col-md-6">
                        <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_postal_zip" name="postal">
                      </div>
                    </div>
      
                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_email_address" name="email">
                      </div>
                      <div class="col-md-6">
                        <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg py-3 btn-block">Place Order</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-12">
                      <h2 class="h3 mb-3 text-black">Your Order</h2>
                      <div class="p-3 p-lg-5 border">
                        <table class="table site-block-order-table mb-5">
                          <thead>
                            <th>Product</th>
                            <th>Total</th>
                          </thead>
                          <tbody>
                            @foreach ($items as $items)
                              @php
                                  $product = DB::table('products')->where('id',$items->product_id)->first();
                              @endphp
                            <tr>
                              <td>{{ $product->productname }} <strong class="mx-2">x</strong> {{ $items->qauntity }}</td>
                              <td>{{ $items->price }}</td>
                            </tr>
                            @endforeach


                            
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                              <td class="text-black">Rs. {{ $total_Amount }}</td>
                            </tr>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                              <td class="text-black font-weight-bold"><strong>Rs. {{ $total_Amount }}</strong></td>
                            </tr>
                          </tbody>
                        </table>
      
                        {{-- <div class="border p-3 mb-3">
                          <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Khalti Money Transfer</a></h3>
      
                          {{-- <div class="collapse" id="collapsebank">
                            <div class="py-2">
                              <p class="mb-0">Make your payment directly into our Khalti. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                          </div> 
                        </div> --}}
      
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
  </section> 
  @endsection

  <script src="/shopbootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="/shopbootstrap/js/jquery-ui.js"></script>
  <script src="/shopbootstrap/js/popper.min.js"></script>
  <script src="/shopbootstrap/js/bootstrap.min.js"></script>
  <script src="/shopbootstrap/js/owl.carousel.min.js"></script>
  <script src="/shopbootstrap/js/jquery.magnific-popup.min.js"></script>
  <script src="/shopbootstrap/js/aos.js"></script>

  <script src="/shopbootstrap/js/main.js"></script>
    
  </body>
</html>