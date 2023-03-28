<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/shopsection/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/shopsection/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/shopsection/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/shopsection/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/shopsection/css/style.css" rel="stylesheet">
</head>

<body>


@extends('frontend.layout.main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Select your trainer</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Our Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                    </div>
                    <form action="{{ route('enroll.withouttreiner') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $plan->id }}"  name="planid">
                    <button type="submit" class="primary-btn btn-normal appoinment-btn">Enroll Without Trainer</button>
                </form>
                </div>
                @foreach ($trainers as $trainers)
                    

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ URL::to('/uploads/trainers/'.$trainers->image) }}" alt="">
                                <div class="product-overlay">
   
                                    <a href="{{ route('trainer.details',['planid' => $plan->id, 'trainerid' => $trainers->id]) }}" class="btn btn-square btn-secondary rounded-circle m-1"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h3" href="">{{ $trainers->name }}</a>
                            </div>
                        </div>
                    </div>  
                    @endforeach  
          </div>
        </div>
    </section>
    
    <!-- Shop Section End -->

    @endsection

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/shopsection/lib/wow/wow.min.js"></script>
    <script src="/shopsection/lib/easing/easing.min.js"></script>
    <script src="/shopsection/lib/waypoints/waypoints.min.js"></script>
    <script src="/shopsection/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/shopsection/lib/counterup/counterup.min.js"></script>
    <script src="/shopsection/lib/parallax/parallax.min.js"></script>
    <script src="/shopsection/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/shopsection/js/main.js"></script>
</body>

</html>