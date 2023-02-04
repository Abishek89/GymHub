@extends('frontend.layout.main')

@section('main-section')

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            @auth
            <div class="hs-item set-bg" data-setbg="landbootstrap/img/hero/hero-1.jpg"> 
            @endauth
            @auth
                @else
                <div class="hs-item set-bg" data-setbg="landbootstrap/img/hero/hero-2.jpg">
            @endauth
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>BEST GYM CENTER</span>
                                <h1>GROW YOUR <strong>STRENGTH WITH </strong>OUR TRAINERS</h1>
                                @auth
                                    @else
                                    <a href="{{ url('/login') }}" class="primary-btn">Sign In</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Professional training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- speciality Section Begin -->
    <section class="speciality-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our speciality</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Body Building</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/gallery-7.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/gallery-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>TRAINING</span>
                            <h5>Training with Experts</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/Equipment.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <h4>High Quality Equipment</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/blog/blog-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <h4>Proper Diet Plan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- speciality Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            @php
                $plan=DB::table('plan')->get();
            @endphp
            <div class="row justify-content-center">
                @foreach ($plan as $plan ) 
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>{{ $plan->planname }}</h3>
                        <div class="pi-price">
                            <h2>Rs {{ $plan->price }}</h2>
                            <span>@if (
                                $plan->package==0)
                                Monthly Packages
                                @elseif(
                                  $plan->package==1)
                                  Annual Packages
                                @else
                                Life Time Membership
                            @endif</span>
                        </div>
                        <ul>
                            <li>Unlimited equipments @if (
                                $plan->equipment==1)
                                ✅
                                @else ❌
                            @endif</li>
                            <li>Personal trainer @if (
                                $plan->trainer==1)
                                ✅   
                            @else ❌ 
                            @endif</li>
                            <li>Admission Fee @if (
                                $plan->admission==1)
                                ✅
                            @else ❌
                            @endif

                            </li>
                        </ul>
                        @auth
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->


    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Gym Photos</span>
                    <h2>COLLECTIONS OF GYM PHOTOS</h2>
                </div>
            </div>
        </div>
        
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="landbootstrap/img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="landbootstrap/img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="landbootstrap/img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="landbootstrap/img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="landbootstrap/img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="landbootstrap/img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    @php
        $trainer=DB::table('trainer')->get();
    @endphp
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    @foreach ($trainer as $member )
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="{{ URL::to('/uploads/trainers/'.$member->image) }}">
                            <div class="ts_text">
                                <h4>{{ $member->trainername }}</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
   @endsection