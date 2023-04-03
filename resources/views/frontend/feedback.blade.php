@extends('frontend.layout.main')

@section('content') 
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="/landbootstrap/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Provide Us Feedback</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>Feedback</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Breadcrumb Section End -->

    <!-- Feedback Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">     
                </div>
                <div class="col-lg-5">
                    <div class="section-title contact-title">
                        <h2>Provide your valuable Feedback</h2>
                    </div>
                    <div class="leave-comment">
                        <form action="{{ route('user.feedback') }}" method="POST">
                            @csrf
                            <textarea placeholder="Comment" name="message"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feedback Section End -->

    @endsection