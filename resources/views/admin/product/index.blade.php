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

                <form action="{{ route('product.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <select name="category_id" class="form-control" onchange="getSubCategory(this.value)">
                            <option value="">--select category--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach


                          </select>
                          <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SubCategory Name</label>
                        <div class="col-sm-9">
                          <select name="sub_category_id" class="form-control" id="subCategoryId">
                            <option value="" disabled selected>--select SubCategory--</option>
                            @foreach ($subCategories as $subCategory)
                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                            @endforeach
                          </select>
                          <span class="text-danger">{{$errors->has('sub_category_id') ? $errors->first('sub_category_id') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="{{old('name')}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Type</label>
                        <div class="col-sm-9">
                          <select name="product_type" class="form-control">
                            <option value="breakfast">--select--</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                          </select>
                          <span class="text-danger">{{$errors->has('product_type') ? $errors->first('product_type') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Value</label>
                        <div class="col-sm-9">
                          <select name="product_value" class="form-control">
                            <option value="">--select--</option>
                            <option value="regular">Regular</option>
                            <option value="popular">Popular</option>
                          </select>
                          <span class="text-danger">{{$errors->has('product_value') ? $errors->first('product_value') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-9">
                          <input type="text" name="price" value="{{old('price')}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('price') ? $errors->first('price') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Preparation Time</label>
                        <div class="col-sm-9">
                          <input type="text" name="preparation_time" value="{{old('preparation_time')}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('preparation_time') ? $errors->first('preparation_time') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Tag</label>
                        <div class="col-sm-9">
                          <input type="text" name="product_tag" value="{{old('product_tag')}}" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('product_tag') ? $errors->first('product_tag') : ''}}</span>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="summernote" class="form-control" placeholder="description"></textarea>

                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" id="" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
