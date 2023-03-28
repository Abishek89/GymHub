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
        <!-- Breadcrumb Section Begin -->
        {{-- <section class="breadcrumb-section set-bg" data-setbg="/landbootstrap/img/breadcrumb-bg.jpg"> --}}
            {{-- <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb-text">
                            <h2>Get Quality products</h2>
                            <div class="bt-option">
                                <a href="{{ url('/') }}">Home</a>
                                <span>Single Product</span>

                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
        {{-- </section> --}}
        <!-- Breadcrumb Section End -->

        <section class="shop-section spad">
          <div class="site-section">
            <div class="container">
              <div class="row mb-5">
                
                  <div class="site-blocks-table">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cart_item as $cart_item)
                        {{-- <form method="post" action="{{ route('cart.update') }}"  > --}}
                          <form method="POST" action="{{ route('cart.update') }}">
                          @csrf 
                        <tr>
                          @php
                              $product = DB::table('products')->where('id',$cart_item->product_id)->first();
                          @endphp
                          <td class="product-thumbnail">
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                <img src="{{ URL::to('uploads/products/'.$product->image) }}" alt="Image" class="rounded-circle">
                              </li>
                            </ul>

                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{ $product->productname }}</h2>
                          </td>
                          <td>Rs. {{ $product->price }}</td>
                          <td>
                              <input type="hidden" value="{{ $cart_item->id }}" name="id">
                            <div class="input-group mb-3" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                              </div>
                              <input type="text" name="qty" class="form-control text-center" value="{{ $cart_item->quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                              </div>
                            </div>
      
                          </td>
                          <td>Rs. {{ $cart_item->price }}</td>
                          <td>
                            <button type="submit" class="btn btn-primary btn-sm">✅</button>
                          </form>
                            <form action="{{ route('cart.delete') }}" method="POST">
                              @csrf
                              @method('delete')
                              <input type="hidden" value="{{ $cart_item->id }}" name="id">
                            <button type="submit" class="btn btn-primary btn-sm">X</button>
                            </form>
                            
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
          
              </div>
      
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">Rs. {{ $total_Amount }}</strong>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                        <strong class="text-black">Rs. {{ $total_Amount }}</strong>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-12">
                          <form action="{{ route('checkout') }}">
                            @csrf
                            <input type="hidden" name="totalamt" value="{{ $total_Amount }}">
                          <button class="btn btn-primary btn-lg py-3 btn-block">Proceed To Checkout</button>
                          </form>
                        </div>
                      </div>
                    </div>
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




