@extends('website.layouts.master')

@section('title')
Product Details
@endsection

@section('content')

@php
    $productBanner = DB::table('home_banners')->first();
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset($productBanner->product_detail)}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Product Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Product Details
==============================-->
<section class="product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-big-img transparent-img">
                    <div class="img"><img src="{{asset($product->image)}}" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    {{-- <p class="price">$20.85<del>$25.99</del></p> --}}
                    <p class="price">${{$product->price}}</p>
                    <h2 class="product-title">{{$product->name}}</h2>
                    <div class="product-rating">
                        <!--<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>-->
                        <!--<a href="shop-details.html" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>-->
                    </div>
                    <p class="text">{!!$product->description!!}</p>
                    <div class="mt-2 link-inherit">
                        <p>
                            <strong class="text-title me-3">Availability:</strong>
                            <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                        </p>
                    </div>
                   
                    
                    
                </div>
            </div>
        </div>
        {{-- <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Customer Reviews</a>
            </li>
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p>Welcome to Restar, where culinary excellence meets exceptional service. Our restaurant is a haven for food enthusiasts seeking an elevated dining experience. Immerse yourself in a sophisticated and inviting ambiance. The carefully curated decor sets the stage for intimate dinners, celebrations, and memorable moments shared with friends and family. Indulge in a gourmet journey with a menu that showcases a fusion of flavors. Our chefs use the finest ingredients to create dishes that are not just meals but unforgettable experiences. Elevate your dining experience with our extensive selection of fine wines and expertly crafted cocktails. Each sip complements the richness of our dishes, creating a symphony of taste.</p>
                <p>From crispy and golden fries to mouthwatering burgers and wraps, our menu offers a variety of fast-food favorites. Each item is crafted with quality ingredients to ensure a tasty experience with every order. Enjoy your quick meal in a casual and friendly setting. Whether you're grabbing a bite on your lunch break or stopping by for a snack, our welcoming atmosphere makes every visit enjoyable. We believe that great food shouldn't break the bank.</p>
            </div>
            <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="woocommerce-Reviews">
                    <div class="th-comments-wrap ">
                        <ul class="comment-list">
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Adam Jhon</h4>
                                        <span class="commented-on"><i class="fal fa-calendar"></i>22 January, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">This product is very much qualityful and I love this working system and speed.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Jusctin Dacon</h4>
                                        <span class="commented-on"><i class="fal fa-calendar"></i>26 January, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">They delivered the product in a few time. Product quality is also very good.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Jacklin July</h4>
                                        <span class="commented-on"><i class="fal fa-calendar"></i>26 January, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">Their product and service is very satisfying. I highly recommend their services.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-4.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="name">Adison Smith</h4>
                                        <span class="commented-on"><i class="fal fa-calendar"></i>26 January, 2024</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">I am just in love with this product. Their service is also very good you can also try.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- Comment Form -->
                    <div class="th-comment-form ">
                        <div class="form-title">
                            <h3 class="blog-inner-title ">Add a review</h3>
                        </div>
                        <div class="row">
                            <div class="form-group rating-select d-flex align-items-center">
                                <label>Your Rating</label>
                                <p class="stars">
                                    <span>
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>
                                </p>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Write a Message" class="form-control"></textarea>
                                <i class="text-title far fa-pencil-alt"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Name" class="form-control">
                                <i class="text-title far fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Email" class="form-control">
                                <i class="text-title far fa-envelope"></i>
                            </div>
                            <div class="col-12 form-group">
                                <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn">Post Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--==============================
Related Product  
==============================-->
        {{-- <div class="space-extra-top mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto">
                    <h2 class="sec-title title-ani text-center">Related Products</h2>
                </div>
                <div class="col-md d-none d-sm-block">
                    <hr class="title-line">
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#productSlider1" class="slider-arrow slider-prev default"><span class="icon"></span></button>
                            <button data-slider-next="#productSlider1" class="slider-arrow slider-next default"><span class="icon"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_1.png" alt="Product Image">
                                <span class="product-tag">-25%</span>
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Egg and Cocumber</a></h3>
                                <span class="price">$24.00<del>$32.00</del></span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_2.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Tofu Red Chili</a></h3>
                                <span class="price">$39.85</span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_3.png" alt="Product Image">
                                <span class="product-tag">-25%</span>
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Salmon Salad</a></h3>
                                <span class="price">$24.00<del>$32.00</del></span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_4.png" alt="Product Image">
                                <span class="product-tag">-25%</span>
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Raw Salmon Salad</a></h3>
                                <span class="price">$18.85<del>$16.99</del></span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_5.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Salmon Beef Stack</a></h3>
                                <span class="price">$32.85</span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_6.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Chicken Fride Rice</a></h3>
                                <span class="price">$30.85</span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_7.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Sicilian Pizza</a></h3>
                                <span class="price">$232.85</span>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                            <div class="product-img transparent-img">
                                <img src="assets/img/product/product_1_8.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 4">
                                    <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                                <h3 class="product-title"><a href="shop-details.html">Chicken with Rice</a></h3>
                                <span class="price">$30.85</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-block d-md-none mt-40 text-center">
                <div class="icon-box">
                    <button data-slider-prev="#productSlider1" class="slider-arrow slider-prev default"><span class="icon"></span></button>
                    <button data-slider-next="#productSlider1" class="slider-arrow slider-next default"><span class="icon"></span></button>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection
