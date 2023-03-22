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

    @section('main-section')
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
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Enroll Id</th>
                          <th class="product-name">Trainer Name</th>
                          <th class="product-price">Status </th>
                          <th class="product-quantity"> Payment </th>
                          <th class="product-total">Cancel </th>
                        </tr>
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
                        <td> <a href="{{ route('payment', $enroll->id) }}"><button class="btn btn-success">Pay</button></a> </td>
                        <td>cancel </td>
                      </tr>
                      @endforeach

                    </tbody>
                    </table>
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









{{-- @extends('frontend.layout.main')

@section('main-section')


<section class="bmi-calculator-section spad">
    <div class="container">
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available plan</h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Enroll Id </th>
                              <th> Trainer Name</th>
                              <th> Status </th>
                              <th> Payment </th>
                              <th> Cancel </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($enroll as $enroll)
                                  
                            <tr>
                              <td>{{ $enroll->id }}</td>
                              @php
                                  $trainer = DB::table('trainer')->where('id',$enroll->trainer)->first();
                              @endphp
                              <td>{{ $trainer->name }}</td>
                              @if ($enroll->status==0) 
                              <td>pending </td>
                              @else
                              <td>approved</td>
                              @endif
                              <td> <a href="{{ route('payment', $enroll->id) }}"><button class="btn btn-success">Pay</button></a> </td>
                              <td>cancel </td>
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
    </div>
</section>
@endsection --}}