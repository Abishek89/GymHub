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
     <link rel="stylesheet" href="/chatbootstrap/css/style1.css" />
    <link rel="stylesheet" href="/chatbootstrap/css/bootstrap1.min.css" /> 
  
    {{-- <link rel="stylesheet" href="{{ asset('/chatbootstrap/style.css') }}"> --}}
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
                    <div class="col-lg-6">
                        <nav class="nav-menu">
                            <ul>
                                @auth
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('aboutus') }}">About Us</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                {{-- <li><a href="{{ route('enrollpage') }}">Enroll</a></li> --}}
                                <li><a href="{{ url('team') }}">Our Team</a></li>
                                <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('bmi-calculator') }}">Bmi calculate</a></li>
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                    </ul>
                                </li>
                                {{-- <li>
                                    <a class="logout" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form> 
                                </li>   --}}
                                @endauth
                            </ul>
                        </nav>
                    </div>
                         <div class="col-lg-3">
                            <div class="top-option"> 
                                <div class="to-social">
                                   
                                    <a href="https://www.facebook.com/profile.php?id=100082720417405"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="https://www.instagram.com/i.m.abishekk/"><i class="fa fa-instagram fa-lg"></i></a>
                                    @auth
                                          <a class="CHATBOX_open nav-link-notify" href="#"><i class="fa fa-comment fa-lg"></i></a> 
                                          
                                    @php
                                    $discuss = DB::table('discussions')->where('trainee',Auth::user()->id)->first();
                                    $message = DB::table('chats')->where('discussion_id',$discuss->id)->get();
                                    @endphp
                                    <div class="CHAT_MESSAGE_POPUPBOX">
                                        <div class="CHAT_POPUP_HEADER">
                                        <h3>Chat with us</h3>
                                        <p>Feel Free To Ask Any Query</p>
                                        </div>
                                        <div class="CHAT_POPUP_BODY">
                                            @foreach ($message as $chat)
                                        @if ($chat->sender_id == Auth::user()->id)
                                        <div class="CHATING_SENDER CHATING_RECEIVEr">
                                            <div class="SEND_SMS_VIEW">
                                            <P>{{ $chat->message }}</P>
                                            </div>
                                            </div>
                                        @else
                                        <div class="CHATING_SENDER">
                                            <div class="SEND_SMS_VIEW">
                                            <P>{{ $chat->message }}</P>
                                            </div>
                                            </div>
                                        @endif
                                        @endforeach 
                                        </div>
                                        <div class="chat-history-footer">
                                            <form class=" d-flex justify-content-between align-items-center" action="{{ route('admin.storemessage') }}" method="POST">
                                              @csrf
                                          <input type="hidden" value="{{ $discuss->id }}" name="selected_chat">
                                              <input class="form-control message-input border-0 me-3 shadow-none" placeholder="Type your message here..." name="chat">
                                              <div class="message-actions d-flex align-items-center">
                                                <button class="btn btn-primary d-flex send-msg-btn" type="submit">
                                                  <i class="bx bx-paper-plane me-md-1 me-0"></i>
                                                  <span class="align-middle d-md-inline-block d-none">Send</span>
                                                </button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                     <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart fa-lg"></i></a> 
                                    <a href="{{ route('userprofile') }}"><i class="fa fa-user-circle-o fa-lg"></i></a>
                                    @endauth
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
        
    </nav>
</header> 
<body>
    @yield('content')
<!-- Footer -->
 <!-- Get In Touch Section Begin -->
 <div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <ul>
                        <li>SundarHaraicha-4, Morang</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>9819368669</li>
                        <li>025-25748564</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>Support.gymhub@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->

<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="/landbootstrap/img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h4>Tips & Guides</h4>
                    <div class="fw-recent">
                        <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                    <div class="fw-recent">
                        <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->


<!-- Js Plugins -->
<script src="{{ asset('/landbootstrap/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/landbootstrap/js/main.js') }}"></script>
<script src="/chatbootstrap/js/jquery1-3.4.1.min.js"></script>
<script src="/chatbootstrap/js/metisMenu.js"></script>
<script src="/chatbootstrap/js/custom.js"></script>
{{-- <script src="{{ asset('/chatbootstrap/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/chatbootstrap/script.js') }}"></script> --}}

</body>

</html>