@extends('frontend.layout.main')

@section('main-section') 
  <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Trainer Details</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Trainer Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href="#" class="primary-btn btn-normal appoinment-btn">Personal Training</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="class-details-text">
                        <div class="cd-trainer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cd-trainer-pic">
                                        <img src="/landbootstrap/img/team/team-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="cd-trainer-text">
                                        <div class="trainer-title">
                                            <h4>{{ $trainer->name }}</h4>
                                            <span>Gym Trainer</span>
                                        </div>
                                        <div class="trainer-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                       
                                        <ul class="trainer-info">
                                            <li><span>Age</span>35</li>
                                            <li><span>Weight</span>{{ $trainer->weight }}bs</li>
                                            <li><span>Height</span>{{ $trainer->height }}</li>
                                        </ul>
                                        
                                    </div>
                                    <form action="{{ route('trainee.enroll') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="trainer_id" value="{{ $trainer->id }}">
                                        <input type="hidden" name ="plan_id" value="{{ $plan->id }}">
                                        <button type="submit" class="primary-btn btn-normal appoinment-btn">Enroll Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Class Details Section End -->
    @endsection