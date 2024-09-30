<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Restar">
    <meta name="description" content="Restar - Fast Food & Restaurant HTML Template">
    <meta name="keywords" content="Restar - Fast Food & Restaurant HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('public/website/assets/img/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('public/website/assets/img/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('public/website/assets/img/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/website/assets/img/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('public/website/assets/img/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('public/website/assets/img/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('public/website/assets/img/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('public/website/')}}{{'public/website/assets/img/favicons/apple-icon-152x152.png'}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/website/')}}{{'public/website/assets/img/favicons/apple-icon-180x180.png'}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/website/assets/img/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/website/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/website/assets/img/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/website/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('public/website/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('public/website/assets/img/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/magnific-popup.min.css')}}">
    <!-- Date Time -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/jquery.datetimepicker.min.css')}}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/swiper-bundle.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/website/assets/css/style.css')}}">
    <!--Toastr Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="theme-golden">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here
	******************************** -->

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!--==============================Preloader==============================-->
    <!--<div class="preloader ">-->
    <!--    <button class="th-btn preloaderCls">Cancel Preloader </button>-->
    <!--    <div class="preloader-inner">-->
    <!--        <div class="loader">-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--==============================Product Lightbox==============================-->
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-big-img transparent-img">
                        <div class="img"><img src="{{asset('public/website/assets/img/product/product_1_5.png')}}" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$20.85<del>$25.99</del></p>
                        <h2 class="product-title">Salmon Beef Stack</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                        </div>
                        <p class="text">The registration fee covers access to all conference sessions, workshops, networking events, exhibition areas, and conference materials. Please refer to the registration page for a detailed breakdown of inclusions. You can make payments through our secure online registration.</p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">Availability:</strong>
                                <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                            </p>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Add to Cart</button>
                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">Salmon-Beef-Stack</span></span>
                            <span class="posted_in">Category: <a href="shop.html">Dinner Food</a></span>
                            <span>Tags: <a href="shop.html">Lunch</a><a href="shop.html">Dinner</a><a href="shop.html">Food</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>

    <!--==============================Sidemenu============================== -->
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{asset('public/website/assets/img/product/menu_thumb_1.png')}}" alt="Cart Image">Egg and Cocumber</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{asset('public/website/assets/img/product/menu_thumb_2.png')}}" alt="Cart Image">Tofu Red Chili</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{asset('public/website/assets/img/product/menu_thumb_3.png')}}" alt="Cart Image">Raw Salmon Salad</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{asset('public/website/assets/img/product/menu_thumb_4.png')}}" alt="Cart Image">Salmon Beef Stack</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="{{asset('public/website/assets/img/product/menu_thumb_5.png')}}" alt="Cart Image">Paper Letter Printing</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--==============================Sidemenu============================== -->
    @php
        $mobileLogo = DB::table('general_websites')->first();
        $contacts   = DB::table('general_contacts')->first();
    @endphp
    <div class="sidemenu-wrapper sidemenu-info ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{route('home')}}"><img src="{{asset($mobileLogo->logo)}}" alt="Restar" style="height: 70px; width: 188px;"></a>
                    </div>
                    <p class="about-text">We provide specialized winterization services to safeguard your pool during the off-season, and when spring arrives, we handle the thorough opening process.</p>
                    <div class="th-social">
                        <a href="{{$contacts->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$contacts->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$contacts->youtube}}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box">
                        <h4 class="box-title">Address Location</h4>
                        <div class="box-content">
                            <div class="box-icon">
                                <i class="fas fa-location-dot"></i>
                            </div>
                            <p class="box-text">{{$contacts->address}}</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="box-title">Phone Number</h4>
                        <div class="box-content">
                            <div class="box-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <p class="box-text"><a href="tel:+16326543564">{{$contacts->mobile}}</a></p>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="box-title">Email address</h4>
                        <div class="box-content">
                            <div class="box-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p class="box-text"><a href="mailto:info@restar.com">{{$contacts->email}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Newsletter</h3>
                <div class="newsletter-widget">
                    <p class="footer-text">Subscribe to our newsletter and receive 15% discount from your order.</p>
                    <form action="#" class="newsletter-form has-icon">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Enter email address" required="">
                        </div>
                        <button type="submit" class="icon-btn"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================Mobile Menu============================== -->
    @php
        $mobileLogo = DB::table('general_websites')->first();
    @endphp
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-restaurant-shop.html"><img src="{{asset($mobileLogo->logo)}}" alt="Restar" style="height: 60px; width:188px;"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="home-restaurant-shop.html">Home</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('team')}}">Chef</a></li>
                            <li><a href="{{route('book.table')}}">Reservation</a></li>
                            <li><a href="{{route('product.gallery')}}">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        @php
                            $categories = DB::table('categories')->where('status',1)->get();
                        @endphp
                        <a href="#">Menus</a>
                        <ul class="sub-menu">
                            @foreach ($categories as $category)
                            <li><a href="{{route('foodmenu',$category->id)}}">{{$category->name}}</a></li>
                            @endforeach


                        </ul>
                    </li>
                    <li>
                        <a href="{{route('book.table')}}">Book A Table</a>
                    </li>

                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================Header Area Star==============================-->

    @include('website.layouts.header')

    <!--==============================Header Area End==============================-->


    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!--Content-->
            @yield('content')

            <!--==============================Footer Area Start==============================-->
            @include('website.layouts.footer')
            <!--==============================Footer Area End==============================-->


            <!--********************************
			Code End  Here
	******************************** -->

            <!-- Smooth scroller -->
        </div>
    </div>


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{asset('public/website/assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <!-- Swiper Js -->
    <script src="{{asset('public/website/assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/website/assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('public/website/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{asset('public/website/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Date Time -->
    <script src="{{asset('public/website/assets/js/jquery.datetimepicker.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('public/website/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/website/assets/js/isotope.pkgd.min.js')}}"></script>

    <!-- Gsap Animation -->
    <script src="{{asset('public/website/assets/js/gsap.min.js')}}"></script>
    <script src="{{asset('public/website/assets/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('public/website/assets/js/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('public/website/assets/js/ScrollSmoother.min.js')}}"></script>
    <script src="{{asset('public/website/assets/js/SplitText.min.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{asset('public/website/assets/js/main.js')}}"></script>
    <!--Toastr Cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Toastr code-->
    @if (Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}");
    </script>
    @endif
</body>

</html>
