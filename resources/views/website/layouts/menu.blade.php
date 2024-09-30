<section class="menu-sec4 space" data-bg-src="{{'public/website/assets/img/bg/menu_bg_4.png'}}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title3"><img src="{{'public/website/assets/img/theme-img/title_icon.svg'}}" alt="Icon">Our Menu</span>
            <h2 class="sec-title title-ani">Foods Menu</h2>
        </div>
        @php
            $products = DB::table('products')->take(6)->get();
        @endphp
        <div class="row gy-30">
            @foreach ($products as $product)
            <div class="col-xl-6">
                <div class="menu-list-block">
                    <div class="menu-list">
                        <div class="box-img">
                            <img src="{{$product->image}}" alt="Food">
                            <!--<div class="actions">-->
                            <!--    <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>-->
                            <!--</div>-->
                        </div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="{{route('product.details',$product->id)}}">{{$product->name}}</a></h3>
                            <div class="box-content">
                                <p class="box-text">{!! Str::limit($product->description,100) !!}</p>
                                <div class="box-line"></div>
                                <h4 class="box-price">${{$product->price}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
            
            
        </div>
        <div class="text-center mt-5">
            <a href="{{route('menu.itemlist')}}" class="btn" style="background:#C59D5F">See More</a>
        </div>
    </div>
</section>
