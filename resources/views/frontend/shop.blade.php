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
                  <div class="block-4 text-center border">
                    <figure class="block-4-image">
                      <a href="shop-single.html"><img src="{{ URL::to('/uploads/products/'.$products->image) }}" alt="Image placeholder" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-2">
                      <h3><a href="shop-single.html">{{ $products->productname }}</a></h3>
                      <p class="mb-0">{{ $products->price }}</p>
                      <p class="mb-0">{{ $products->description }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
          </div>
            </div>
        </div>
    </section>
    
    <!-- Shop Section End -->

    @endsection