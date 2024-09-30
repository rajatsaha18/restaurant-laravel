
@php
    $website = DB::table('general_websites')->first();
@endphp

<footer class="footer-wrapper footer-layout1" data-bg-src="{{$website->footer_back_img}}">
    <!--<div class="container z-index-common">-->
    <!--    <div class="newsletter-wrap">-->
    <!--        <div class="newsletter-content">-->
    <!--            <h2 class="sec-title title-ani2 text-white m-0">Subscribe for daily update</h2>-->
    <!--        </div>-->
    <!--        <form class="newsletter-form" action="{{route('subscribe')}}" method="POST">-->
    <!--            @csrf-->
    <!--            <div class="form-group">-->
    <!--                <input class="form-control" name="email" type="email" placeholder="Email Address" required="">-->
    <!--            </div>-->
    <!--            <button type="submit" class="th-btn">Subscribe</button>-->
    <!--        </form>-->
    <!--    </div>-->
    <!--</div>-->
    
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                @php
                                    $logoFooter = DB::table('general_websites')->first();
                                    $generalContact = DB::table('general_contacts')->first();
                                @endphp
                                <a href="home-restaurant-shop.html"><img src="{{asset($logoFooter->footer_logo)}}" alt="Restar" style="height: 60px; width:187px;"></a>
                            </div>
                            <p class="about-text">We believe that great food shouldn't break the bank. That's why we offer affordable options without compromising on taste.</p>
                            <div class="info-box">
                                <h4 class="box-title">Address Location</h4>
                                <div class="box-content">
                                    <div class="box-icon">
                                        <i class="fas fa-location-dot"></i>
                                    </div>
                                    <p class="box-text">{{$generalContact->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">

                            <h4 class="sec-title title-ani2 text-white m-0 mb-3">Subscribe for daily update</h4>
                            <form class="newsletter-form" action="{{route('subscribe')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email Address" required="">
                                </div>
                                <button type="submit" class="th-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{route('team')}}">Team Member</a></li>
                                <li><a href="{{route('contact')}}">Company History</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                @php
                    $categories = DB::table('categories')->where('status',1)->take(4)->get();
                @endphp
                {{-- <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Food Menu</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($categories as $category)
                                <li><a href="{{route('foodmenu',$category->id)}}">{{$category->name}}</a></li>

                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div> --}}
                @php
                    $generalContact = DB::table('general_contacts')->first();
                @endphp
                {{-- <div class="col-md-6 col-xl-auto">

                </div> --}}
            </div>
        </div>
    </div>
    @php
        $footer_copyright = DB::table('general_websites')->first();
    @endphp
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gx-1 gy-2 align-items-center">
                <div class="col-md-7">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="{{url('https://sarasoftware.com.bd/best-software-it-company')}}">{{$footer_copyright->copyright}}</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{route('contact')}}">Terms & Condition</a></li>
                            <li><a href="{{route('contact')}}">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
