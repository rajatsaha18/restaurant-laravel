@extends('website.layouts.master')

@section('content')

@php
    $blogBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($blogBanner->blog)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">MenuList</h1>
            <ul class="breadcumb-menu">
                <li><a href="#">Home</a></li>
                <li>MenuList</li>
            </ul>
        </div>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <h2 class="text-center">Piedradesol Menu</h2>
        <div class="text-center">
            <a href="{{ route('download.pdf') }}" class="btn mb-5" style="background: #C59D5F">Menu as Pdf</a>
        </div>

        <div class="row">
            @foreach ($menuList as $item)
            <div class="col-md-3 mb-3">
                <div class="card card-body shadow">
                    <img src="{{ asset($item->image) }}" class="small-image" alt="menulist-image">
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
@endsection

