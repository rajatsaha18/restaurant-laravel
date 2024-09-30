@extends('website.layouts.master')

@section('title')
Booking Table
@endsection

@section('content')
<style>
    .form-title
    {
        margin-top: -20px!important;
    }
</style>
@php
    $homeBanner = DB::table('home_banners')->first();
@endphp
<div class="breadcumb-wrapper " data-bg-src="{{asset($homeBanner->gallery)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Reservation</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Reservation</li>
            </ul>
        </div>
    </div>
</div>
<!--============================== Contact Area  ==============================-->
<div class="space-top">
    <div class="container th-container">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">Reservation</span>
            <h2 class="sec-title title-ani">Make A Reservation</h2>
            <div class="mt-n1">
                <img src="{{asset('public/website/assets/img/shape/line_1.svg')}}" alt="shape">
            </div>
        </div>

        <div class="reservation-form-wrap" data-bg-src="{{asset('public/website/assets/img/bg/reservation_bg_2.jpg')}}">
            <form action="{{route('new.tablebook')}}" method="POST" class="reservation-form input-white">
                @csrf
                <h3 class="form-title">Book A Table</h3>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                        <i class="fal fa-user"></i>
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                    </div>
                    <div class="form-group col-12">
                        <input type="mobile" class="form-control" name="number" id="number" placeholder="Phone Number">
                        <i class="fal fa-phone"></i>
                        <span class="text-danger">{{$errors->has('number') ? $errors->first('number') : ''}}</span>
                    </div>
                    <div class="form-group col-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                        <i class="fal fa-envelope"></i>
                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control" name="people" id="people" placeholder="Total Person">
                        <i class="fal fa-user-group"></i>
                        <span class="text-danger">{{$errors->has('people') ? $errors->first('people') : ''}}</span>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="date" class="form-control" name="date" placeholder="Date">
                        <span class="text-danger">{{$errors->has('date') ? $errors->first('date') : ''}}</span>

                    </div>
                    <div class="form-group col-sm-6">
                        <input type="time" class="time-pick form-control" name="time" id="time-pick" placeholder="Time">
                        <span class="text-danger">{{$errors->has('time') ? $errors->first('time') : ''}}</span>

                    </div>
                    <div class="form-group col-12">
                        <textarea name="
                        " id="message" cols="30" rows="3" class="form-control" placeholder="Write Special Quest.."></textarea>
                        <i class="fal fa-pencil"></i>
                    </div>
                </div>
                <button type="submit" class="th-btn w-100">Book A Table</button>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</div>
<!--==============================Testimonial Area  ==============================-->
{{-- <section class="overflow-hidden space" id="testi-sec">
    <div class="container">
        <div class="slider-area testi-grid-area">
            <div class="swiper th-slider thumb-slider2 slider-tab" id="thumb-slider2" data-slider-options='{"loop":true,"centeredSlides":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true,"centeredSlidesBounds":true,"slidesPerView":3,"breakpoints":{"0":{"spaceBetween":30},"992":{"spaceBetween":80}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_1.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_2.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_3.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_4.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_5.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/assets/img/testimonial/testi_3_6.jpg')}}" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider testi-grid-slider tab-view" id="testiSlider3" data-slider-options='{"thumbs":{"swiper":".thumb-slider2"}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Alex Fernandes</h3>
                            <p class="box-desig">Master Chef</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Jasemin Jui</h3>
                            <p class="box-desig">Customer</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Martin Danial</h3>
                            <p class="box-desig">Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Fernandes John</h3>
                            <p class="box-desig">Food Specialist</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Termain Justin</h3>
                            <p class="box-desig">Director</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <p class="box-text">From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. our welcoming atmosphere makes every visit enjoyable.</p>
                            <h3 class="box-title">Rohan Ramdan</h3>
                            <p class="box-desig">Food Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#testiSlider3, #thumb-slider2" class="slider-arrow slider-prev"><span class="icon"></span></button>
            <button data-slider-next="#testiSlider3, #thumb-slider2" class="slider-arrow slider-next"><span class="icon"></span></button>
        </div>
    </div>
</section> --}}
@endsection
