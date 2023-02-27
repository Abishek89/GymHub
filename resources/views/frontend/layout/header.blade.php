<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GymHub</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/landbootstrap/css/style.css') }}" type="text/css">
</head>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="/landbootstrap/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <nav class="nav-menu">
                            <ul>
                                @auth
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('aboutus') }}">About Us</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                <li><a href="{{ url('team') }}">Our Team</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('bmi-calculator') }}">Bmi calculate</a></li>
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form> 
                                </li>  
                                @endauth
                            </ul>
                        </nav>
                    </div>
                         <div class="col-lg-2">
                            <div class="top-option">
                                <div class="to-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        
    </nav>
</header> 
    {{-- <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="/landbootstrap/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="nav-menu">
                        <ul>
                            @auth
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('aboutus') }}">About Us</a></li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('shop') }}">Shop</a></li>
                            <li><a href="{{ url('team') }}">Our Team</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('bmi-calculator') }}">Bmi calculate</a></li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="logout" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form> 
                            </li>  
                            @endauth
                        </ul>
                    </nav>
                </div>
                     <div class="col-lg-2">
                        <div class="top-option">
                            <div class="to-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </header> --}}
    <!-- Header End -->