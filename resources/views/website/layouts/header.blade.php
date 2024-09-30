
<style>
.header-layout3 .header-logo {
    background-color: transparent!important;
}
    
</style>
<header class="th-header header-layout3 ">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="w-100">
                @php
                    $logo = DB::table('general_websites')->first();
                @endphp
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{route('home')}}"><img src="{{asset($logo->logo)}}" alt="Restar" style="height: 70px; width:150px;"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="">
                                    <a href="{{route('home')}}">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <!--<li><a href="{{route('team')}}">Chef</a></li>-->
                                        {{-- <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                        <li><a href="team.html">Chef</a></li>
                                        <li><a href="team-details.html">Chef Details</a></li> --}}
                                        <li><a href="{{route('book.table')}}">Reservation</a></li>
                                        <li><a href="{{ route('product.gallery') }}">Gallery</a></li>
                                        {{-- <li><a href="error.html">Error Page</a></li> --}}
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
                                <li class="">
                                    <a href="{{route('menulist')}}">MenuList</a>
                                </li>
                                <li class="">
                                    <a href="{{route('book.table')}}">Book A Table</a>
                                </li>
                                {{-- <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-button">
                            {{-- <form class="header-search">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form> --}}
                            {{-- <button type="button" class="icon-btn sideMenuToggler">
                                <span class="badge">5</span>
                                <i class="far fa-cart-shopping"></i>
                            </button> --}}
                            {{-- <div class="header-call">
                                <h3 class="box-title"><a href="tel:+9878218015"><span class="icon"></span> +987-82-18015</a></h3>
                                <p class="box-text">Contact us for reservation</p>
                            </div> --}}
                            <button type="button" class="square-btn sideMenuInfo">
                                <i class="fal fa-bars"></i>
                            </button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
