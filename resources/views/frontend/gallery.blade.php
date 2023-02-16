@extends('frontend.layout.main')

@section('main-section')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Gallery</h2>
                        <div class="bt-option">
                            <a href="/home">Home</a>
                            <a href="#">Pages</a>
                            <span>Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Gallery Section Begin -->
    @php
        $gallery=DB::table('gallery')->get();
    @endphp
    <div class="gallery-section gallery-page">
        <div class="gallery">
            @foreach ($gallery as $photo )
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="{{ URL::to('/uploads/gallery/'.$photo->image) }}">
                <a href="{{ URL::to('/uploads/gallery/'.$photo->image) }}" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Gallery Section End -->
    @endsection
 