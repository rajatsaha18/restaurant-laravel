<style>
    @media only screen and (min-width: 1700px) {
        .hero-img .img1 {
            max-width: 80%!important;
            margin-left: 900px!important;
        }
        .hero-img .offer {
            margin-left: 900px!important;
        }
    }
</style>
<div class="th-hero-wrapper hero-3" id="hero">
    <div class="banner-area">
        <div class="ball-shape">
            <div class="img1">
                <img src="{{'public/website/assets/img/hero/ball_1.svg'}}" alt="shape">
            </div>
            <div class="img2">
                <img src="{{'public/website/assets/img/hero/ball_2.svg'}}" alt="shape">
            </div>
            <div class="img3">
                <img src="{{'public/website/assets/img/hero/ball_3.svg'}}" alt="shape">
            </div>
        </div>
        <div class="swiper th-slider" data-bg-src="{{'public/website/assets/img/hero/hero_bg_3_1.png'}}" id="heroSlide3" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-overlay" data-ani="slideinright" data-ani-delay="0.7s"></div>
                        <div class="container th-container">
                            <div class="hero-style3">
                                <span class="hero-subtitle text-center" data-ani="slideinup" data-ani-delay="0.2s">Healthy & Quality</span>
                                <h1 class="hero-title4" data-ani="slideinup" data-ani-delay="0.4s">Delicious</h1>
                                <h2 class="hero-title3" data-ani="slideinup" data-ani-delay="0.5s">Food Menu</h2>
                                <a href="{{route('book.table')}}" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s">Booking Table</a>
                            </div>
                        </div>
                        <div class="hero-img">
                            <div class="shape1" data-ani="slideinup" data-ani-delay="0.5s">
                                <img src="{{'public/website/assets/img/hero/hero_shape_3_3.png'}}" alt="shape">
                            </div>
                            <!--<div class="offer" data-ani="slideinup" data-ani-delay="0.4s">-->
                            <!--    <img src="{{'public/website/assets/img/hero/hero_offer_1.svg'}}" alt="shape">-->
                            <!--</div>-->
                            <div class="img1" data-ani="slideinright" data-ani-delay="0.1s">
                                <img src="{{asset($slider->image)}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
        <div class="hero-bottom">
            <div class="icon-box">
                <button data-slider-prev="#heroSlide3" class="slider-arrow slider-prev default"><span class="icon"></span></button>
                <button data-slider-next="#heroSlide3" class="slider-arrow slider-next default"><span class="icon"></span></button>
            </div>
            <div class="hero-thumb" data-slider-tab="#heroSlide3">
                @foreach ($sliders as $slider)
                <div class="tab-btn active">
                    <img src="{{$slider->image}}" alt="Image" height="60px" width="60px"/>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    {{-- <a href="{{route('book.table')}}" class="hero-btn">Book A Table</a>
    <div class="hero-social">
        <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div> --}}
</div>
