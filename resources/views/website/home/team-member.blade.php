@extends('website.layouts.master')

@section('title')
Team Member
@endsection

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Chef</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>Our Chef</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================Team Area  ==============================-->
<section class="space">
    <div class="container z-index-common">
        <div class="row gy-30">
            <!-- Single Item -->
            @foreach ($teamMembers as $teamMember)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="th-team team-card">
                    <div class="box-img">
                        <img src="{{asset($teamMember->image)}}" alt="Team">
                    </div>
                    <h3 class="box-title"><a href="team-details.html">{{$teamMember->name}}</a></h3>
                    <p class="box-desig">{{$teamMember->designation}}</p>
                </div>
            </div>

            @endforeach


        </div>
        <div class="th-pagination text-center pt-50">
            <ul>
                <li><a href="blog.html">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
