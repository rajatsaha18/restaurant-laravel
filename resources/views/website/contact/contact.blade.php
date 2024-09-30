@extends('website.layouts.master')

@section('title')
Contact
@endsection

@section('content')
@php
    $contacts = DB::table('home_banners')->first();
@endphp

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!--==============================Breadcumb============================== -->
            <div class="breadcumb-wrapper " data-bg-src="{{$contacts->contact}}">
                <div class="container">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="home-restaurant-shop.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--==============================Contact Info Area==============================-->
            <div class="space">
                <div class="container">
                    <div class="row gx-0 gy-40">
                        <div class="col-xl-5">
                            <div class="contact-feature-area">
                                <div class="title-area mb-32">
                                    @php
                                        $contacts = DB::table('general_contacts')->first();
                                    @endphp
                                    <h2 class="sec-title title-ani2">Contact Information</h2>
                                    <div class="text-ani">
                                        <p class="sec-text">Immerse yourself in a sophisticated and inviting ambiance. The carefully curated decor sets the stage for intimate dinners, celebrations.</p>
                                    </div>
                                </div>
                                <div class="contact-feature-wrap">
                                    <div class="contact-feature">
                                        <div class="box-icon">
                                            <i class="fal fa-location-dot"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title text-ani">Location</h3>
                                            <p class="box-text text-ani">{{$contacts->address}}</p>
                                        </div>
                                    </div>
                                    <div class="contact-feature">
                                        <div class="box-icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title text-ani">Email Address</h3>
                                            <p class="box-text text-ani">
                                                <p>{{$contacts->email}}</p> 
                                        </div>
                                    </div>
                                    <div class="contact-feature">
                                        <div class="box-icon">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title text-ani">Contact Number</h3>
                                            <p class="box-text text-ani">
                                                <p> {{$contacts->mobile}}</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="th-social text-ani">
                                    <a href="{{$contacts->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$contacts->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{$contacts->youtube}}"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <form action="{{route('contact.create')}}" method="post" class="contact-form ajax-contact">
                                @csrf
                                <h2 class="sec-title title-ani2">Get In Touch</h2>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name">
                                        <i class="fal fa-user"></i>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email Address">
                                        <i class="fal fa-envelope"></i>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="tel" class="form-control" name="number" id="number" value="{{ old('number') }}" placeholder="Phone Number">
                                        <i class="fal fa-phone"></i>
                                        @error('number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="name" placeholder="Subject">
                                        <i class="fal fa-user"></i>
                                        @error('subject')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" value="{{ old('message') }}" id="message" cols="30" rows="3" class="form-control" placeholder="Type Appointment Note...."></textarea>
                                        <i class="fal fa-pencil"></i>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-btn col-12">
                                        <button type="submit" class="th-btn w-100">Send Message Now</button>
                                    </div>
                                </div>
                                {{-- <p class="form-messages mb-0 mt-3"></p> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!--==============================
Contact Info Area
==============================-->
            {{-- <div class="space-bottom">
                <div class="container">
                    <h2 class="sec-title title-ani2 text-center">Come and visit our Branches</h2>
                    <div class="row gy-30">
                        <div class="col-lg-6">
                            <div class="location-card">
                                <div class="box-img">
                                    <img src="{{'public/website/'}}assets/img/normal/location_1.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title title-ani2">Los Angeles, CA</h3>
                                    <p class="box-text title-ani2">Riverside 25, San Francisco California</p>
                                    <p class="box-info title-ani2"><i class="fal fa-envelope"></i> <a href="mailto:contact@restaurantate.com">contact@restaurantate.com</a></p>
                                    <p class="box-info title-ani2"><i class="fal fa-phone"></i> <a href="tel:+4878701087">(487) 870 - 1087</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="location-card">
                                <div class="box-img">
                                    <img src="{{'public/website/'}}assets/img/normal/location_2.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title title-ani2">San Francisco, CA</h3>
                                    <p class="box-text title-ani2">Riverside 25, San Francisco California</p>
                                    <p class="box-info title-ani2"><i class="fal fa-envelope"></i> <a href="mailto:contact@restaurantate.com">contact@restaurantate.com</a></p>
                                    <p class="box-info title-ani2"><i class="fal fa-phone"></i> <a href="tel:+4878701087">(487) 870 - 1087</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--==============================Map Area==============================-->
            <div class="">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.3150910684813!2d13.322205576677216!3d52.4553207720443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85a8570b6010d%3A0xba7d1d9e02e010df!2sSch%C3%BCtzenstra%C3%9Fe%201%2C%2012165%20Berlin%2C%20Germany!5e0!3m2!1sen!2sbd!4v1719764980027!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
@endsection
