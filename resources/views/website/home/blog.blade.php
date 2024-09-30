@extends('website.layouts.master')

@section('content')
@php
    $blogBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($blogBanner->blog)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="">
                    <img src="{{asset($blog->image)}}" alt="blog-image">
                    <span>Date: <i class="fa-solid fa-calendar-days"></i> {{$blog->date}}</span>
                    <h3>{{$blog->name}}</h3>
                    <p>{!!$blog->description!!}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    @foreach ($items as $item)
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <img src="{{asset($item->image)}}" alt="blog-img" style="height: 90px;width:100px;">
                        </div>
                        <div class="col-md-8">
                            <a href="{{route('blog.detail',$item->id)}}"><h6 style="margin-left:0!important;">{{$item->name}}</h6></a>

                            <span><i class="fa-solid fa-calendar-days"></i> {{$item->date}}</span>
                        </div>
                        <div>

                        </div>
                    </div>

                    @endforeach



                </div>

                {{-- @foreach ($blogs as $blogItem)

                    <h4>{{$blogItem->name}}</h4>

                @endforeach --}}


            </div>
        </div>
    </div>
</section>
@endsection
