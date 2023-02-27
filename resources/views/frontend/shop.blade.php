@extends('frontend.layout.main')

@section('main-section')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Get Quality products</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    @php
        $products=DB::table('products')->get();
    @endphp
    <section class="shop-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>OUR PRODUCTS</span>
                        <h2>QUALITY GYM SUPPLEMENTS FOR GYM RAT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $products )
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="{{ URL::to('/uploads/products/'.$products->image) }}">
                        <div class="ts_text">
                            <h4><a href="{{ route('shopsingle',$products->id) }}">{{ $products->productname }}</a></h4>
                            <h4>Rs {{ $products->price }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
          </div>
        </div>
    </section>
    
    <!-- Shop Section End -->

    @endsection
