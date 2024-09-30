@extends('website.layouts.master')

@section('content')
@php
    $blogBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($blogBanner->gallery)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Menus</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>Menus</li>
            </ul>
        </div>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3 mb-5">
                <div class="card">

                    <img src="{{asset($product->image)}}" alt="menus-image" style="height: 200px!important">
                    <div class="card-body">
                        <a href="{{route('product.details',$product->id)}}"><h5>{{$product->name}}</h5></a>
                        <p>price:${{$product->price}}</p>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
@endsection
