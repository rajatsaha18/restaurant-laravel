@extends('website.layouts.master')

@section('title')
Gallery
@endsection

@section('content')
@php
    $galleryBanner = DB::table('home_banners')->first();
@endphp

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="breadcumb-wrapper" data-bg-src="{{asset($galleryBanner->gallery)}}">
        <div class="container">
          <div class="breadcumb-content">
            <h1 class="breadcumb-title">Gallery</h1>
            <ul class="breadcumb-menu">
              <li><a href="home-restaurant-shop.html">Home</a></li>
              <li>Gallery</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="space">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    @foreach ($galleries as $gallery)
                    <div class="col-md-3 mb-3">
                        <div class="card card-body shadow">
                            <img src="{{asset($gallery->image)}}" alt="" style="height: 200px;">
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
        {{-- <div class="container z-index-common">
          <div class="row gy-30 filter-active">
            @forelse ($galleries as $gallery)
              <div class="col-xxl-auto col-md-6 filter-item">
                <div class="gallery-card">
                  <div class="box-img">
                    <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->name }}" />
                    <a href="{{ asset($gallery->image) }}" class="box-btn popup-image"><i
                        class="fat fa-plus"></i></a>
                  </div>
                </div>
              </div>
            @empty

            @endforelse


          </div>
        </div> --}}
      </div>

    </div>
  </div>
  <div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "></path>
    </svg>
  </div>
  <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/main.js"></script>
@endsection
