<section class="space" id="category-sec">
    <div class="container">
        <div class="slider-area">
            <div class="swiper th-slider" id="catSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1300":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div class="category-box">
                            <div class="box-img">
                                <img src="{{$category->image}}" alt="Image" height="157px!important" width="118px"/>
                            </div>
                            <h3 class="box-title"><a href="{{route('foodmenu',$category->id)}}">{{$category->name}}</a></h3>
                        </div>
                    </div>
                        
                    @endforeach
                    

                </div>
            </div>
            <button data-slider-prev="#catSlider2" class="slider-arrow slider-prev"><span class="icon"></span></button>
            <button data-slider-next="#catSlider2" class="slider-arrow slider-next"><span class="icon"></span></button>
        </div>
    </div>
</section>
