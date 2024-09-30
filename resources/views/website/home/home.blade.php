@extends('website.layouts.master')
@section('title')
Home Page
@endsection

@section('content')

<!--==============================Hero Area==============================-->
            @include('website.layouts.hero')

            <!--======== / Hero Section ========-->

            <!--==============================Category Area Start==============================-->
            @include('website.layouts.category')

            <!--==============================Category Area End==============================-->

            <!--==============================Delicious Area==============================-->
            <section class="space-bottom">
                <div class="container">
                    <div class="row gy-30 justify-content-center">
                        <div class="col-lg-6">
                            <div class="cta-card" data-bg-src="{{'public/website/assets/img/bg/cta_bg_21.jpg'}}">
                                <div class="box-price">
                                    <div class="bg">
                                        <img src="{{$deliciousBanner->image_one}}" alt="bg">
                                    </div>
                                    <!--<div class="content">-->
                                    <!--    <p class="text">Only</p>-->
                                    <!--    <h6 class="price">$5</h6>-->
                                    <!--</div>-->
                                </div>
                                <h3 class="box-title title-ani2">Delicious</h3>
                                <h5 class="box-heading title-ani2">Piedra Del Sol Burger</h5>
                                <h4 class="box-text title-ani2">Limited Offer</h4>
                                <div class="text-ani">
                                    <a href="{{route('contact')}}" class="th-btn btn-sm style3">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-card" data-bg-src="">
                                <div class="box-price">
                                    <div class="bg">
                                        <img src="{{$deliciousBanner->image_two}}" alt="bg">
                                    </div>
                                    <!--<div class="content">-->
                                    <!--    <p class="text">Only</p>-->
                                    <!--    <h6 class="price">$8</h6>-->
                                    <!--</div>-->
                                </div>
                                <h4 class="box-title title-ani2">Delicious</h4>
                                <h5 class="box-heading title-ani2">Mexican French Freies</h5>
                                <h5 class="box-text title-ani2">Limited Offer</h5>
                                <div class="text-ani">
                                    <a href="{{route('contact')}}" class="th-btn btn-sm style3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--==============================/Delicious Area==============================-->

            <!--==============================About Area==============================-->
            <div class="overflow-hidden about-sec1" id="about-sec">
                <div class="shape-mockup moving" data-top="8%" data-right="4%"><img src="{{'public/website/assets/img/shape/leaf-3.png'}}" alt="shape"></div>
                <div class="shape-mockup jump-reverse d-none d-md-block" data-bottom="9%" data-right="5%"><img src="{{'public/website/assets/img/shape/garlic_5.png'}}" alt="shape"></div>
                <div class="shape-mockup jump d-none d-md-block" data-bottom="4%" data-right="3%"><img src="{{'public/website/assets/img/shape/leaf-4.png'}}" alt="shape"></div>
                <div class="container pb-5 mb-4 mb-xl-0 pb-xl-0">
                    <div class="row align-items-center">
                        <div class="col-xl-7 mb-40 mb-xl-0">
                            <div class="img-box6">
                                <div class="shape1">
                                    {{-- <img src="{{asset('public/website/images/leaff.png')}}" alt="shape" data-speed="1.17"> --}}
                                </div>
                                <div class="img1">
                                    <img src="{{asset($about->image)}}" alt="Why">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 text-center text-xl-start">
                            <div class="title-area mb-35">
                                <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">About Our Food</span>
                                <h4 class="sec-title">{{$about->name}}</h4>
                                <div class="text-ani">
                                    <p class="sec-text">{!! $about->description !!}</p>
                                </div>
                            </div>
                            <div class="about-feature-wrap">
                                <div class="about-feature text-ani">
                                    <div class="box-icon">
                                        <img src="{{'public/website/assets/img/icon/about_feature_1.svg'}}" alt="Icon">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Best Quality Food</h3>
                                        <p class="box-text">{{$about->best_quality_description}}</p>
                                    </div>
                                </div>
                                <div class="about-feature text-ani">
                                    <div class="box-icon">
                                        <img src="{{'public/website/assets/img/icon/about_feature_2.svg'}}" alt="Icon">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Qualified Chef</h3>
                                        <p class="box-text">{{$about->qualify_chef_description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-ani">
                                <a href="{{route('book.table')}}" class="th-btn style-border">Book A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==============================About Area End==============================-->

            <!--==============================Feature Area Start==============================-->
            <!--<section class="feature-sec1" data-bg-src="{{'public/website/assets/img/bg/feature_bg_1.jpg'}}">-->
            <!--    <div class="container">-->
            <!--        <div class="feature-card-wrap">-->
            <!--            <div class="feature-card">-->
            <!--                <div class="box-icon">-->
            <!--                    <img src="{{'public/website/assets/img/icon/feature_card_1.svg'}}" alt="icon">-->
            <!--                </div>-->
            <!--                <div class="media-body">-->
            <!--                    <h3 class="box-title text-ani">Discount Voucher</h3>-->
            <!--                    <p class="box-text text-ani">Authoritatively transition unique portals before.</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="feature-card">-->
            <!--                <div class="box-icon">-->
            <!--                    <img src="{{'public/website/assets/img/icon/feature_card_2.svg'}}" alt="icon">-->
            <!--                </div>-->
            <!--                <div class="media-body">-->
            <!--                    <h3 class="box-title text-ani">Original Recipes</h3>-->
            <!--                    <p class="box-text text-ani">Authoritatively transition unique portals before.</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="feature-card">-->
            <!--                <div class="box-icon">-->
            <!--                    <img src="{{'public/website/assets/img/icon/feature_card_3.svg'}}" alt="icon">-->
            <!--                </div>-->
            <!--                <div class="media-body">-->
            <!--                    <h3 class="box-title text-ani">Fast Serve On Table</h3>-->
            <!--                    <p class="box-text text-ani">Authoritatively transition unique portals before.</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!--==============================Feature Area End==============================-->

            <!--==============================Product Area Start==============================-->
            @include('website.layouts.product-area')

            <!--==============================Product Area End==============================-->

            <!--==============================Cta Area==============================-->
            <section class="overflow-hidden " data-bg-src="">
                <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="-10%" data-left="0"><img src="{{$discountBanner->image}}" alt="shape" data-speed="1.17"></div>
                <div class="shape-mockup jump d-none d-xl-block" data-bottom="10%" data-right="0"><img src="{{$discountBanner->image}}" alt="shape" data-speed="1.12"></div>
                <div class="container pb-40 pb-lg-0">
                    <div class="row flex-row-reverse align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-img1">
                                <div class="img1">
                                    <img src="{{$discountBanner->image}}" alt="Food">
                                </div>
                                <!--<h4 class="price" data-bg-src="{{'public/website/assets/img/bg/shape_bg_2.svg'}}">$60</h4>-->
                            </div>
                        </div>
                        <div class="col-lg-6 pt-40 pb-40">
                            <div class="text-center text-lg-start">
                                <!--<h4 class="text-theme title-ani2 mb-35">Get 30% Discount</h4>-->
                                <!--<h2 class="sec-title title-ani2 h1 text-white mb-30">Grill Chicken Stick</h2>-->
                                <!--<h2 class="sec-title title-ani2 text-white mb-32">Limited Offer</h2>-->
                                {{-- <div class="text-ani">
                                    <a href="shop-details.html" class="th-btn style3">Order Now</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==============================Delivery Area==============================-->
            <!--<div class="overflow-hidden space">-->
            <!--    <div class="container">-->
            <!--        <div class="row align-items-center flex-row-reverse">-->
            <!--            <div class="col-xl-7 mb-25 mb-xl-0">-->
            <!--                <div class="img-box7">-->
            <!--                    <div class="shape1">-->
            <!--                        <img class="flipX" src="{{'public/website/assets/img/normal/delivery_2.png'}}" alt="shape">-->
            <!--                    </div>-->
            <!--                    <div class="img1 flipY">-->
            <!--                        <img src="{{$foodDelivery->image}}" alt="Why">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-xl-5 text-center text-xl-start">-->
            <!--                <div class="title-area mb-35">-->
            <!--                    <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">Food Delivery</span>-->
            <!--                    <h2 class="sec-title title-ani">Where Good Food Meets Fast Delivery</h2>-->
            <!--                    <div class="text-ani">-->
            <!--                        <p class="sec-text">Indulge in a gourmet journey with a menu that showcases a fusion of flavors. Our chefs use the finest ingredients to create dishes that are not just meals but unforgettable experiences.</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="check-feature-wrap">-->
            <!--                    <div class="check-feature text-ani">-->
            <!--                        <i class="fa-solid fa-badge-check"></i>-->
            <!--                        Delivery In 30 Minutes-->
            <!--                    </div>-->
            <!--                    <div class="check-feature text-ani">-->
            <!--                        <i class="fa-solid fa-badge-check"></i>-->
            <!--                        Shipping $50.00-->
            <!--                    </div>-->
            <!--                    <div class="check-feature text-ani">-->
            <!--                        <i class="fa-solid fa-badge-check"></i>-->
            <!--                        Delivery On Doorstep-->
            <!--                    </div>-->
            <!--                    <div class="check-feature text-ani">-->
            <!--                        <i class="fa-solid fa-badge-check"></i>-->
            <!--                        On the Way Tracing-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="text-ani">-->
            <!--                    <a href="{{route('contact')}}" class="th-btn style-border">Contact Us</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--==============================Menu Area Start==============================-->
            @include('website.layouts.menu')
            <!--==============================Menu Area End==============================-->



            <!--==============================Cta Area==============================-->
            @php
                $foodMenu = DB::table('foods_menu_banners')->first();
            @endphp
            <section class="" data-pos-for=".menu-sec4" data-sec-pos="top-half">
                <div class="container z-index-common mt-negative">
                    <div class="row offer-box-row">
                        <div class="col-xl-4 col-md-6">
                            <div class="offer-box mega-hover" data-bg-src="{{asset($foodMenu->item_one_image)}}">
                                <h3 class="box-title title-ani2">{{$foodMenu->item_one_name}}</h3>
                                <p class="box-text title-ani2">{{$foodMenu->item_one_description}}</p>
                                <a href="{{route('contact')}}" class="line-btn title-ani2">Order Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="offer-box mega-hover" data-bg-src="{{asset($foodMenu->item_two_image)}}">
                                <h3 class="box-title title-ani2">{{$foodMenu->item_two_name}}</h3>
                                <p class="box-text title-ani2">{{$foodMenu->item_two_description}}</p>
                                <a href="{{route('contact')}}" class="line-btn title-ani2">Order Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="offer-box mega-hover" data-bg-src="{{$foodMenu->item_three_image}}">
                                <h3 class="box-title title-ani2">{{$foodMenu->item_three_name}}</h3>
                                <p class="box-text title-ani2">{{$foodMenu->item_three_description}}</p>
                                <a href="{{route('contact')}}" class="line-btn title-ani2">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==============================Brand Area==============================-->
            <!--<div class="space">-->
            <!--    <div class="container">-->
            <!--        <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"5"}}}'>-->
            <!--            <div class="swiper-wrapper">-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_1.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_2.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_3.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_4.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_5.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_1.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_2.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_3.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_4.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="swiper-slide">-->
            <!--                    <div class="brand-box style2">-->
            <!--                        <img src="{{'public/website/'}}assets/img/brand/brand_2_5.svg" alt="Brand Logo">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--==============================Contact Area==============================-->
            {{-- <div class="bg-white">
                <div class="shape-mockup jump d-none d-xl-block" data-top="7%" data-right="0"><img src="{{'public/website/'}}assets/img/shape/tomato_1.png" alt="shape" data-speed="1.1"></div>
                <div class="shape-mockup moving d-none d-xl-block" data-bottom="0" data-right="0"><img src="{{'public/website/'}}assets/img/shape/red_cilli.png" alt="shape"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="reserve-img1">
                                <img src="{{'public/website/'}}assets/img/normal/booking_1.jpg" alt="Booking">
                            </div>
                        </div>
                        <div class="col-xl-5 text-center text-xl-start">
                            <div class="ps-xxl-5 pt-40 pb-40 mb-40 mb-xl-0">
                                <div class="title-area mb-30">
                                    <span class="sub-title4">Need Booking?</span>
                                    <h2 class="sec-title">Reserve Your Personal Table Now!</h2>
                                </div>
                                <form action="mail.php" method="POST" class="reservation-form3">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="text" class="date-time-pick form-control" name="date-time" id="date-time-pick" placeholder="Date & Time">
                                            <i class="fal fa-calendar-alt"></i>
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" name="people" id="people" placeholder="Total Person">
                                            <i class="fal fa-user-group"></i>
                                        </div>
                                    </div>
                                    <button class="th-btn">Reservation Now</button>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!--==============================Testimonial Area==============================-->
            {{-- <section class="overflow-hidden space" id="testi-sec">
                <div class="container">
                    <div class="slider-area testi-grid-area">
                        <div class="swiper th-slider thumb-slider2 slider-tab" id="thumb-slider2" data-slider-options='{"loop":true,"centeredSlides":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true,"centeredSlidesBounds":true,"slidesPerView":3,"breakpoints":{"0":{"spaceBetween":30},"992":{"spaceBetween":80}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/assets/img/testimonial/testi_3_1.jpg'}}" alt="Image">
                                        <span class="box-quote"></span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/assets/img/testimonial/testi_3_2.jpg'}}" alt="Image">
                                        <span class="box-quote"></span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/assets/img/testimonial/testi_3_3.jpg'}}" alt="Image">
                                        <span class="box-quote"></span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/assets/img/testimonial/testi_3_4.jpg'}}" alt="Image">
                                        <span class="box-quote"></span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/assets/img/testimonial/testi_3_5.jpg'}}" alt="Image">
                                        <span class="box-quote"></span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tab-btn">
                                        <img src="{{'public/website/'}}" alt="Image">
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

            <!--==============================Blog Area==============================-->
            <section class="space-bottom" id="blog-sec">
                <div class="container">
                    <div class="title-area text-center">
                        <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">News & Blog</span>
                        <h2 class="sec-title">Our Latest News & Blog</h2>
                    </div>
                    <div class="row gy-40">
                        @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <img src="{{$blog->image}}" alt="blog image" style="height: 200px!important;">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">{{$blog->date}}</a>
                                        <a href="blog.html">RECHIPES</a>
                                    </div>
                                    <h3 class="box-title"><a href="{{route('blog.detail',$blog->id)}}">{{$blog->name}}</a></h3>
                                    <a href="{{route('blog.detail',$blog->id)}}" class="th-btn btn-sm style-border">Read More</a>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </section>
@endsection
