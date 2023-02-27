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
          <div class="container">
        <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="/shopbootstrap/images/shoe_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <p><strong class="text-primary h2">Tank Top Shirt</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas, distinctio, aperiam, ratione dolore.</p>
            <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>
            <p><strong class="text-primary h3">Rs 50.00</strong></p>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="{{ route('addtocart') }}" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 site-section-heading text-center pt-4">
            <p><strong class="text-primary h2">Features Products</strong></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
      <div class="ts-item set-bg" data-setbg="/landbootstrap/img/team/team-4.jpg">
          <div class="ts_text">
            <h4><a href="#">Hero</a></h4>
              <h4>Rs 30000</h4>   
             </div>
           </div>
        </div>
      </div>
    </div>
  </section> 

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