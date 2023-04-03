@extends('frontend.layout.main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Services</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="landbootstrap/img/services/services-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Personal training</h4>
                        <p>Our gym offers one-on-one personal training to help you achieve your fitness goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="landbootstrap/img/services/services-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Group fitness classes</h4>
                        <p>Our gym offers exciting group fitness classes for a fun and supportive workout experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="landbootstrap/img/services/services-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Body building</h4>
                        <p>Our gym offers specialized body building classes to help you build muscle and reach your fitness goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="landbootstrap/img/services/services-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Strength training</h4>
                        <p>Our gym provides strength training classes to help build strength and achieve fitness goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

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
                            <li>Refundable @if (
                                $plan->refundable==1)
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
                        {{-- <a href="{{ route('',$plan->id) }}" class="primary-btn pricing-btn" >Enroll now</a> --}}
                        <a href="{{ route('trainerselection',$plan->id) }}" class="primary-btn pricing-btn" >Enroll now</a>
                        
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    @endsection