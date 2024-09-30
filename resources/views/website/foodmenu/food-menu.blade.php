@extends('website.layouts.master')

@section('title')
Food-Menu
@endsection

@section('content')
@php
    $menuBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($menuBanner->about)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$categoryItem->name}}</h1>
            <ul class="breadcumb-menu">
                <li><a href="#">Home</a></li>
                <li>{{$categoryItem->name}}</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Menu Area
==============================-->
<!--<section class="space">-->
<!--    <div class="container">-->
<!--        <div class="title-area text-center">-->
<!--            <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">Our Menu</span>-->
<!--            <h2 class="sec-title title-ani">Our Restaurant Foods Subcategory</h2>-->
<!--        </div>-->
<!--        <div class="row gy-30">-->
<!--            @foreach ($subCategories as $subCategory)-->
<!--            <div class="col-xl-6">-->
<!--                <div class="menu-list-block">-->
<!--                    <div class="menu-list">-->
<!--                        <div class="box-img">-->
<!--                            <img src="{{asset($subCategory->image)}}" alt="Food">-->
<!--                            <div class="actions">-->
<!--                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h3 class="box-title"><a href="#">{{$subCategory->name}}</a></h3>-->
<!--                            <div class="box-content">-->
<!--                                <p class="box-text">Candied Jerusalem artichokes, truffle</p>-->
<!--                                <div class="box-line"></div>-->
<!--                                <h4 class="box-price"></h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            @endforeach-->

<!--        </div>-->


<!--        <div class="mt-5 text-center">-->
<!--            <div class="btn-group justify-content-center">-->
<!--                <a href="{{route('book.table')}}" class="th-btn style-border">Book A Table</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--All Food Menu-->
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{asset('public/website/assets/img/theme-img/title_icon2.svg')}}" alt="Icon">Our Menu</span>
            <h2 class="sec-title title-ani">Our Restaurant Foods Menu</h2>
        </div>
        <!--@php-->
        <!--    $products = DB::table('products')->where('status',1)->get();-->
        <!--@endphp-->
        <div class="row gy-30">
            @foreach ($products as $product)
            <div class="col-xl-6">
                <div class="menu-list-block">
                    <div class="menu-list">
                        <div class="box-img">
                            <img src="{{asset($product->image)}}" alt="Food">
                            <!--<div class="actions">-->
                            <!--    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>-->
                            <!--</div>-->
                        </div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="{{route('product.details',$product->id)}}">{{$product->name}}</a></h3>
                            <div class="box-content">
                                <p class="box-text">{!! Str::limit($product->description,40) !!}</p>
                                <div class="box-line"></div>
                                <h4 class="box-price">${{$product->price}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>


        <div class="mt-5 text-center">
            <div class="btn-group justify-content-center">
                <a href="{{route('book.table')}}" class="th-btn style-border">Book A Table</a>
            </div>
        </div>
    </div>
</section>
<!--==============================
Contact Area
==============================-->

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
Brand Area
==============================-->
<!--<div class="space-bottom">-->
<!--    <div class="container brand-container">-->
<!--        <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"7"}}}'>-->
<!--            <div class="swiper-wrapper">-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-box">-->
<!--                        <img src="{{asset('public/website/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
