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

        <section class="shop-section spad">  
            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <span class="icon-check_circle display-3 text-success"></span>
                    <h2 class="display-3 text-black">Thank you!</h2>
                    <p class="lead mb-5">You order was successfuly completed.</p>
                    <p><a href="{{ route('shop') }}" class="btn btn-sm btn-primary">Back to shop</a></p>
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