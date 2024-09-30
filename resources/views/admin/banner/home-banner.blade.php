@extends('admin.layouts.master')

@section('title')
Home Banner
@endsection

@section('content')
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Home Banner</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('homebanner.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">About</label>
                            <input type="file" name="about" class="form-control" placeholder="about">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->about)}}" alt="about-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Gallery</label>
                            <input type="file" name="gallery" class="form-control" placeholder="logo">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->gallery)}}" alt="gallery-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Blog</label>
                            <input type="file" name="blog" class="form-control" placeholder="Favicon">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->blog)}}" alt="blog-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Team</label>
                            <input type="file" name="team" class="form-control" placeholder="Footer logo">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->team)}}" alt="favicon-img" height="70px" width="90px"/>

                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Contact</label>
                            <input type="file" name="contact" class="form-control" placeholder="background image">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->contact)}}" alt="contact-img" height="70px" width="90px"/>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Product</label>
                            <input type="file" name="product" class="form-control" placeholder="background image">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->product)}}" alt="product-img" height="70px" width="90px"/>

                            @endif
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Product Detail</label>
                            <input type="file" name="product_detail" class="form-control" placeholder="background image">
                            @if (!empty($bannerImage))
                            <img src="{{asset($bannerImage->product_detail)}}" alt="product_detail-img" height="70px" width="90px"/>

                            @endif
                        </div>
                    </div>


                </div>

                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Delicious Banner-->
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Delicious Banner</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('deliciousbanner.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-password-input">Item Name</label>

                            @if (!empty($deliciousBanner))
                            <input type="text" name="name" value="{{$deliciousBanner->name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Image One</label>
                            <input type="file" name="image_one" class="form-control" placeholder="Image One">
                            @if (!empty($deliciousBanner))
                            <img src="{{asset($deliciousBanner->image_one)}}" alt="delicious-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Image two</label>
                            <input type="file" name="image_two" class="form-control" placeholder="Image Two">
                            @if (!empty($deliciousBanner))
                            <img src="{{asset($deliciousBanner->image_two)}}" alt="delicious-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Discount Banner-->
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Discount Banner</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('discountbanner.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-password-input">Item Name</label>

                            @if (!empty($discountBanner))
                            <input type="text" name="name" value="{{$discountBanner->name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                            @if (!empty($discountBanner))
                            <img src="{{asset($discountBanner->image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Food Delivery banner-->
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Food delivery Banner</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('foodDelivery.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Title</label>
                            {{-- <input type="text" name="name" class="form-control" placeholder="name"/> --}}

                            @if (!empty($foodDelivery))
                            <input type="text" name="name" value="{{$foodDelivery->name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Description</label>
                            {{-- <textarea name="description" class="form-control" placeholder="Description"></textarea> --}}

                            @if (!empty($foodDelivery))
                            <textarea name="description" class="form-control" placeholder="Description">{{$foodDelivery->description}}</textarea>
                            @else
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                            @if (!empty($foodDelivery))
                            <img src="{{asset($foodDelivery->image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Foods Menu banner-->
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Foods Menu Banner</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('foodmenu.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Item One Name</label>
                            {{-- <input type="text" name="item_one_name" class="form-control" placeholder="name"/> --}}

                            @if (!empty($foodMenu))
                            <input type="text" name="item_one_name" value="{{$foodMenu->item_one_name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="item_one_name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Description</label>
                            {{-- <textarea name="item_one_description" class="form-control" placeholder="Description"></textarea> --}}
                            @if (!empty($foodMenu))
                            <textarea name="item_one_description" class="form-control" placeholder="Description">{{$foodMenu->item_one_description}}</textarea>
                            @else
                            <textarea name="item_one_description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="item_one_image" class="form-control" placeholder="Image">
                            @if (!empty($foodMenu))
                            <img src="{{asset($foodMenu->item_one_image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Item Two Name</label>
                            {{-- <input type="text" name="item_two_name" class="form-control" placeholder="name"/> --}}

                            @if (!empty($foodMenu))
                            <input type="text" name="item_two_name" value="{{$foodMenu->item_two_name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="item_two_name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Description</label>
                            {{-- <textarea name="item_two_description" class="form-control" placeholder="Description"></textarea> --}}

                            @if (!empty($foodMenu))
                            <textarea name="item_two_description" class="form-control" placeholder="Description">{{$foodMenu->item_two_description}}</textarea>
                            @else
                            <textarea name="item_two_description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="item_two_image" class="form-control" placeholder="Image">
                            @if (!empty($foodMenu))
                            <img src="{{asset($foodMenu->item_two_image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Item Three Name</label>
                            {{-- <input type="text" name="item_three_name" class="form-control" placeholder="name"/> --}}

                            @if (!empty($foodMenu))
                            <input type="text" name="item_three_name" value="{{$foodMenu->item_three_name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="item_three_name" class="form-control" placeholder="name"/>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Description</label>
                            {{-- <textarea name="item_three_description" class="form-control" placeholder="Description"></textarea> --}}

                            @if (!empty($foodMenu))
                            <textarea name="item_three_description" class="form-control" placeholder="Description">{{$foodMenu->item_three_description}}</textarea>
                            @else
                            <textarea name="item_three_description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="item_three_image" class="form-control" placeholder="Image">
                            @if (!empty($foodMenu))
                            <img src="{{asset($foodMenu->item_three_image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>

                </div>

                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

