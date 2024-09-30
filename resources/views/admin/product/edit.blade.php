@extends('admin.layouts.master')

@section('title')
Product
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">

            <div class="card-body">
                <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black">Add Product Form</h4>
                <a href="{{route('product.manage')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-list-check"></i> Manage Product</button></a>

                <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <select name="category_id" class="form-control" required onchange="getSubCategory(this.value)">
                            <option value="">--select category--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : '' }}>{{$category->name}}</option>

                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SubCategory Name</label>
                        <div class="col-sm-9">
                          <select name="sub_category_id" class="form-control" id="subCategoryId">
                            <option value="" disabled selected>--select SubCategory--</option>
                            @foreach ($subCategories as $subCategory)
                            <option value="{{$subCategory->id}}" {{$subCategory->id == $product->sub_category_id ? 'selected' : '' }}>{{$subCategory->name}}</option>

                            @endforeach

                          </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="{{$product->name}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Type</label>
                        <div class="col-sm-9">
                          <select name="product_type" class="form-control">
                            <option value="veg" {{$product->product_type == 'veg' ? 'selected' : ''}}>Veg</option>
                            <option value="non-veg" {{$product->product_type == 'non-veg' ? 'selected' : ''}}>Non-veg</option>
                          </select>
                          <span class="text-danger">{{$errors->has('product_type') ? $errors->first('product_type') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Value</label>
                        <div class="col-sm-9">
                          <select name="product_value" class="form-control">
                            <option value="">--select--</option>
                            <option value="regular" {{$product->product_value == 'regular' ? 'selected' : ''}}>Regular</option>
                            <option value="popular" {{$product->product_value == 'popular' ? 'selected' : ''}}>Popular</option>
                          </select>
                          <span class="text-danger">{{$errors->has('product_value') ? $errors->first('product_value') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                          <input type="text" name="price" value="{{$product->price}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('price') ? $errors->first('price') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">
                            <img src="{{asset($product->image)}}" alt="product-img" height="70px" width="90px"/>

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Preparation Time</label>
                        <div class="col-sm-9">
                          <input type="text" name="preparation_time" value="{{$product->preparation_time}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('preparation_time') ? $errors->first('preparation_time') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Tag</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_tag" value="{{$product->product_tag}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('product_tag') ? $errors->first('product_tag') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="summernote" class="form-control" placeholder="description">{{$product->description}}</textarea>

                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$product->status == '1' ? 'selected' : ''}}>Active</option>
                                <option value="0" {{$product->status == '0' ? 'selected' : ''}}>InActive</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
