<!--<section class="space" id="shop-sec">-->
<!--    <div class="shape-mockup spin d-none d-lg-block" data-top="8%" data-left="3%"><img class="gspin" src="{{'public/website/'}}assets/img/shape/flower_9.png" alt="shape"></div>-->
<!--    <div class="shape-mockup jump-reverse" data-bottom="8%" data-right="0"><img src="{{'public/website/'}}assets/img/shape/flower_6.png" alt="shape" data-speed="1.2"></div>-->
<!--    <div class="container text-center">-->
<!--        <div class="title-area text-center">-->
<!--            <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">Our Menu</span>-->
<!--            <h2 class="sec-title">Our Popular Foods Item</h2>-->
<!--        </div>-->
<!--        {{-- <div class="text-ani">-->
<!--            <div class="tab-menu1 filter-menu-active">-->
<!--                <button data-filter="*" class="th-btn style-border btn-sm active" type="button">All Foods</button>-->
<!--                <button data-filter=".cat1" class="th-btn style-border btn-sm" type="button">Breakfast</button>-->
<!--                <button data-filter=".cat2" class="th-btn style-border btn-sm" type="button">Lunch</button>-->
<!--                <button data-filter=".cat3" class="th-btn style-border btn-sm" type="button">Dinner</button>-->
<!--            </div>-->
<!--        </div> --}}-->
<!--        <div class="row gy-40 filter-active">-->
<!--            @foreach ($products as $product)-->
<!--            <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3">-->
<!--                <div class="th-product product-grid">-->
<!--                    <div class="product-img transparent-img">-->
<!--                        <img src="{{$product->image}}" alt="Product Image" style="height: 200px!important"; width="210px!important;">-->
<!--                        <span class="product-tag">-25%</span>-->
<!--                        <div class="actions">-->
<!--                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>-->
<!--                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>-->
<!--                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="product-content">-->
<!--                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">-->
<!--                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>-->
<!--                        </div>-->
<!--                        <h3 class="product-title"><a href="{{route('product.details',$product->id)}}">{{$product->name}}</a></h3>-->
<!--                        <span class="price">{{$product->price}}$</span>-->
<!--                        {{-- <span class="price">$24.00<del>$32.00</del></span> --}}-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
                
<!--            @endforeach-->
            
            

<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="space" id="category-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">Our Menu</span>
            <h2 class="sec-title">Our Popular Foods Item</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider" id="catSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1300":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                    <div class="swiper-slide">
                        <div class="category-box">
                            <div class="box-img">
                                <img src="{{$product->image}}" alt="Image" style="height: 120px!important;"/>
                            </div>
                            <h3 class="box-title"><a href="{{route('foodmenu',$product->id)}}">{{$product->name}}</a></h3>
                            <span class="price">{{$product->price}}$</span>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <!--<button data-slider-prev="#catSlider2" class="slider-arrow slider-prev"><span class="icon"></span></button>-->
            <!--<button data-slider-next="#catSlider2" class="slider-arrow slider-next"><span class="icon"></span></button>-->
        </div>
    </div>
</section>
