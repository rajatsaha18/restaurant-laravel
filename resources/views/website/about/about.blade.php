@extends('website.layouts.master')

@section('title')
About
@endsection

@section('content')
@php
    $aboutBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($aboutBanner->about)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Feature Area
==============================-->
<section class="space-top">
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">Our Restaurant Services</span>
            <h2 class="sec-title title-ani">Our Commitment to Excellence</h2>
        </div>
        <div class="row gy-4">
            <div class="col-xl-3 col-md-6">
                <div class="feature-box">
                    <div class="box-shape">
                        <img src="{{asset('public/website/assets/img/shape/flower_7.png')}}" alt="shape">
                    </div>
                    <div class="box-icon">
                        <img src="{{asset('public/website/assets/img/icon/feature_box_1.svg')}}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title text-ani"><a href="service-details.html">Discount Voucher</a></h3>
                        <div class="text-ani">
                            <p class="box-text">offering savings on authentic cuisine, encouraging diners to enjoy delicious meals at a reduced price.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="feature-box">
                    <div class="box-shape">
                        <img src="{{asset('public/website/assets/img/shape/flower_7.png')}}" alt="shape">
                    </div>
                    <div class="box-icon">
                        <img src="{{asset('public/website/assets/img/icon/feature_box_2.svg')}}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title text-ani"><a href="service-details.html">Original Recipes</a></h3>
                        <div class="text-ani">
                            <p class="box-text">feature authentic flavors with traditional ingredients, creating delicious, unique dishes that reflect rich culinary heritage.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="feature-box">
                    <div class="box-shape">
                        <img src="{{asset('public/website/assets/img/shape/flower_7.png')}}" alt="shape">
                    </div>
                    <div class="box-icon">
                        <img src="{{asset('public/website/assets/img/icon/feature_box_3.svg')}}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title text-ani"><a href="service-details.html">100% Fresh Foods</a></h3>
                        <div class="text-ani">
                            <p class="box-text">ensures every dish is made with the finest, freshest ingredients for an authentic dining experience.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="feature-box">
                    <div class="box-shape">
                        <img src="{{asset('public/website/assets/img/shape/flower_7.png')}}" alt="shape">
                    </div>
                    <div class="box-icon">
                        <img src="{{asset('public/website/assets/img/icon/feature_box_4.svg')}}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title text-ani"><a href="service-details.html">Serve On Table</a></h3>
                        <div class="text-ani">
                            <p class="box-text">offers vibrant, flavorful dishes like tacos and enchiladas, served fresh on the table for a delightful dining experience.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--==============================
About Area
==============================-->
<div class="space" id="about-sec">
    <div class="shape-mockup jump" data-top="10%" data-right="0"><img src="{{asset('public/website/assets/img/shape/flower_6.png')}}" alt="shape" data-speed="1.15"></div>
    <div class="shape-mockup jump" data-bottom="10%" data-right="8%"><img src="{{asset('public/website/assets/img/shape/garlic_1.png')}}" alt="shape" data-speed="1.2"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-40 mb-xl-0">
                <div class="img-box8">
                    @php
                        $aboutIcon = DB::table('home_banners')->first();
                    @endphp
                    <!--<div class="shape1">-->
                    <!--    <img class="gspin" src="" alt="shape">-->
                    <!--</div>-->
                    <div class="img1">
                        <img src="{{ asset($about->image) }}" alt="Why" style="height: 500px;">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="text-center ps-xxl-5">
                    <div class="title-area mb-35">
                        <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">About Our Restaurant</span>
                        <h4 class="sec-title title-ani">{{ $about->name }}</h4>
                        <div class="text-ani">
                            <p class="sec-text">{!! $about->description !!}</p>
                        </div>
                    </div>
                    <img class="mb-40" src="{{asset('public/website/assets/img/shape/line_dotted_1.svg')}}" alt="shape">
                    <!--<h3 class="box-title">JOSEFINE</h3>-->
                    <!--<img src="{{asset('public/website/assets/img/shape/sign.png')}}" alt="shape">-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Team Area
==============================-->
@php
    $teamMembers = DB::table('team_members')->where('status',1)->get();
@endphp
<section class="bg-smoke space">
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">Our Expert Team</span>
            <h2 class="sec-title title-ani">Meet Our Professional Team</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    @foreach ($teamMembers as $teamMember)
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{asset($teamMember->image)}}" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="#">{{$teamMember->name}}</a></h3>
                            <p class="box-desig">{{$teamMember->designation}}</p>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><span class="icon"></span></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><span class="icon"></span></button>
        </div>
    </div>
</section>
<!--==============================
Counter Area
==============================-->
<div class="space-extra" data-bg-color="#DD5903">
    <div class="container pt-10 pb-10">
        <div class="counter-card-wrap">
            <div class="counter-card title-ani">
                <div class="box-shadow">2.8k</div>
                <h2 class="box-number text-white"><span class="counter-number">300</span></h2>
                <p class="box-text">Our Dally Order</p>
            </div>
            <div class="counter-card title-ani">
                <div class="box-shadow">28</div>
                <h2 class="box-number text-white"><span class="counter-number">4</span></h2>
                <p class="box-text">Specialist Chef</p>
            </div>
            <div class="counter-card title-ani">
                <div class="box-shadow">139</div>
                <h2 class="box-number text-white"><span class="counter-number">300</span></h2>
                <p class="box-text">Our Menu & Dish</p>
            </div>
            <div class="counter-card title-ani">
                <div class="box-shadow">99</div>
                <h2 class="box-number text-white"><span class="counter-number">12</span></h2>
                <p class="box-text">Our Members</p>
            </div>
            <div class="counter-card title-ani">
                <div class="box-shadow">39</div>
                <h2 class="box-number text-white"><span class="counter-number">3</span></h2>
                <p class="box-text">Won the Awards</p>
            </div>
        </div>
    </div>
</div>
<!--==============================
Testimonial Area
==============================-->
{{-- <section class="overflow-hidden space" id="testi-sec">
    <div class="container">
        <div class="slider-area testi-grid-area">
            <div class="swiper th-slider thumb-slider2 slider-tab" id="thumb-slider2" data-slider-options='{"loop":true,"centeredSlides":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true,"centeredSlidesBounds":true,"slidesPerView":3,"breakpoints":{"0":{"spaceBetween":30},"992":{"spaceBetween":80}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_1.jpg" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_2.jpg" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_3.jpg" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_4.jpg" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_5.jpg" alt="Image">
                            <span class="box-quote"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tab-btn">
                            <img src="{{asset('public/website/')}}assets/img/testimonial/testi_3_6.jpg" alt="Image">
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
<!--==============================
History Area
==============================-->
{{-- <div class="">
    <div class="container">
        <div class="th-video video-box1 flipY" data-pos-for="#story-sec" data-sec-pos="bottom-half">
            <img src="{{asset('public/website/')}}assets/img/normal/video_1.jpg" alt="video">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
        </div>
    </div>
</div> --}}
{{-- <div class="space" id="story-sec" data-bg-src="{{asset('public/website/')}}assets/img/bg/square_pattern4.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{asset('public/website/')}}assets/img/theme-img/title_icon2.svg" alt="Icon">About Story</span>
            <h2 class="sec-title title-ani text-white">About Our Journey Story</h2>
        </div>
        <div class="row story-box-row">
            <div class="col-lg-3 col-sm-6">
                <div class="story-box ">
                    <div class="box-img" data-mask-src="{{asset('public/website/')}}assets/img/bg/story_bg_mask.png">
                        <img src="{{asset('public/website/')}}assets/img/normal/story_1_1.jpg" alt="image">
                    </div>
                    <div class="box-content text-ani">
                        <h3 class="box-title">January 2020</h3>
                        <p class="box-text">Our restaurant is a haven for food enthusiasts seeking an elevated dining experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="story-box even">
                    <div class="box-img" data-mask-src="{{asset('public/website/')}}assets/img/bg/story_bg_mask.png">
                        <img src="{{asset('public/website/')}}assets/img/normal/story_1_2.jpg" alt="image">
                    </div>
                    <div class="box-content text-ani">
                        <h3 class="box-title">February 2021</h3>
                        <p class="box-text">Our restaurant is a haven for food enthusiasts seeking an elevated dining experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="story-box ">
                    <div class="box-img" data-mask-src="{{asset('public/website/')}}assets/img/bg/story_bg_mask.png">
                        <img src="{{asset('public/website/')}}assets/img/normal/story_1_3.jpg" alt="image">
                    </div>
                    <div class="box-content text-ani">
                        <h3 class="box-title">March 2022</h3>
                        <p class="box-text">Our restaurant is a haven for food enthusiasts seeking an elevated dining experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="story-box even">
                    <div class="box-img" data-mask-src="{{asset('public/website/')}}assets/img/bg/story_bg_mask.png">
                        <img src="{{asset('public/website/')}}assets/img/normal/story_1_4.jpg" alt="image">
                    </div>
                    <div class="box-content text-ani">
                        <h3 class="box-title">April 2023</h3>
                        <p class="box-text">Our restaurant is a haven for food enthusiasts seeking an elevated dining experience.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}

<!--==============================
Delivery Area
==============================-->
            @php
                $about = DB::table('food_delivery_banners')->first();
            @endphp
<div class="overflow-hidden space">
    <div class="container">
        <!--<div class="row align-items-center flex-row-reverse">-->
        <!--    <div class="col-xl-7 mb-25 mb-xl-0">-->
        <!--        <div class="img-box7">-->
        <!--            <div class="shape1">-->
        <!--                <img class="flipX" src="" alt="shape">-->
        <!--            </div>-->
        <!--            <div class="img1 flipY">-->
        <!--                <img src="{{asset($about->image)}}" alt="Why">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="col-xl-5 text-center text-xl-start">-->
        <!--        <div class="title-area mb-35">-->
        <!--            <span class="sub-title3"><img src="" alt="Icon">Food Delivery</span>-->
        <!--            <h2 class="sec-title">Where Good Food Meets Fast Delivery</h2>-->
        <!--            <div class="text-ani">-->
        <!--                <p class="sec-text">Indulge in a gourmet journey with a menu that showcases a fusion of flavors. Our chefs use the finest ingredients to create dishes that are not just meals but unforgettable experiences.</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="check-feature-wrap">-->
        <!--            <div class="check-feature text-ani">-->
        <!--                <i class="fa-solid fa-badge-check"></i>-->
        <!--                Delivery In 30 Minutes-->
        <!--            </div>-->
        <!--            <div class="check-feature text-ani">-->
        <!--                <i class="fa-solid fa-badge-check"></i>-->
        <!--                Free Shipping $50.00-->
        <!--            </div>-->
        <!--            <div class="check-feature text-ani">-->
        <!--                <i class="fa-solid fa-badge-check"></i>-->
        <!--                Delivery On Doorstep-->
        <!--            </div>-->
        <!--            <div class="check-feature text-ani">-->
        <!--                <i class="fa-solid fa-badge-check"></i>-->
        <!--                On the Way Tracing-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="text-ani">-->
        <!--            <a href="shop.html" class="th-btn style-border">Order Now</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<!--==============================
Brand Area
==============================-->
<div class="space-bottom">
    <div class="container brand-container">
        <!--<div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"7"}}}'>-->
        <!--    <div class="swiper-wrapper">-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide">-->
        <!--            <div class="brand-box">-->
        <!--                <img src="{{asset('public/website/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
@endsection
