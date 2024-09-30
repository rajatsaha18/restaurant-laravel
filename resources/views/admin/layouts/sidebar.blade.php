<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}" class="waves-effect">
                        <i class="fa-solid fa-address-card"></i>
                        {{-- <span class="badge badge-pill badge-info float-right">03</span> --}}
                        <span>Profile</span>
                    </a>
                </li>
                <li class="menu-title"><span style="font-size: 15px!important;">Promotion</span></li>
                <li>
                    <a href="{{route('slider.manage')}}">
                        <i class="fa-solid fa-images"></i>
                        <span> Slider</span>
                    </a>
                    {{-- <a href="">
                        <i class="bx bx-layout"></i>
                        <span>Banner</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">Home Banner</a></li>
                        <li><a href="">Delicious Banner</a></li>
                        <li><a href="">Discount Banner</a></li>
                        <li><a href="">Food Delivery Banner</a></li>
                        <li><a href="">Foods Menu Banner</a></li>
                        <li><a href="">Needs Booking Banner</a></li>
                    </ul> --}}

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Banner</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('banner.home')}}">Home Banner</a></li>
                    </ul>
                </li>
                <!--<li>-->
                <!--    <a href="{{route('brand.logo')}}" class="">-->
                <!--        <i class="fa-solid fa-layer-group"></i>-->
                <!--        <span>Brand Logo</span>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="{{route('menulist.manage')}}" class="">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Menu List</span>
                    </a>
                </li>
                <li class="menu-title"><span style="font-size: 14px!important;"><i class="fa-brands fa-product-hunt"></i> Product Management</span></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Category Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category.add')}}">Add Category</a></li>
                        <li><a href="{{route('category.manage')}}">Manage Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-table"></i>
                        <span>SubCategory Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('subCategory.add')}}">Add SubCategory</a></li>
                        <li><a href="{{route('subCategory.manage')}}">Manage SubCategory</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span>Product Module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('product.add') }}">Add Product</a></li>
                        <li><a href="{{ route('product.manage') }}">Manage Product</a></li>
                    </ul>
                </li>

                {{-- <li class="menu-title">Apps</li> --}}
                <li class="menu-title"><span style="font-size: 12px!important;"><i class="fa-solid fa-utensils"></i> Restaurant Management</span></li>

                <li>
                    <a href="{{route('admin.book.table')}}" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Table Bookings</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="chat.html" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-pill badge-success float-right">New</span>
                        <span>Working Hours</span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{route('subscribe.admin')}}" class=" waves-effect">
                        <i class="bx bx-chat"></i>
                        <span class="badge badge-pill badge-success float-right">New</span>
                        <span>Subscribe</span>
                    </a>
                </li>



                {{-- <li class="menu-title"><span style="font-size: 15px!important;"><i class="fa-solid fa-user"></i> User Management</span></li> --}}


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Customers</span>
                    </a>
                </li> --}}

                <li class="menu-title"><span style="font-size: 15px!important;"><i class="fa-solid fa-gear"></i> System Settings</span></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.about')}}">About Us</a></li>
                        <li><a href="{{route('admin.blog')}}">Blog</a></li>
                        <li><a href="{{route('admin.gallery')}}">Gallery</a></li>
                        <li><a href="{{route('admin.team.member')}}">Team Member</a></li>
                        <!--<li><a href="ui-alerts.html">Privacy Policy</a></li>-->
                        <!--<li><a href="ui-buttons.html">Terms & Condition</a></li>-->
                        <!--<li><a href="ui-dropdowns.html">Faqs</a></li>-->
                    </ul>
                </li>
                <li>
                    <a href="{{route('general.settings')}}" class="waves-effect">
                        <i class="bx bx-tone"></i>
                        <span>General Settings</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
