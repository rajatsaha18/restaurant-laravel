
@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">

            <div class="card-body">
                <h4 class="card-title mb-4 text-center text-bold" style="font-size: 20px!important; color:black">Edit Category Form</h4>
                <a href="{{route('subCategory.manage')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-list-check"></i> Manage SubCategory</button></a>

                <form action="{{route('subCategory.update',['id' => $subCategory->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <select name="category_id" class="form-control" required>
                            <option value="">--select category--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SubCategory Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="{{$subCategory->name}}" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" class="form-control" placeholder="description">{{$subCategory->description}}</textarea>

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">SubCategory Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">
                            <img src="{{asset($subCategory->image)}}" alt="category-image" height="70px" width="90px"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$subCategory->status == '1'?'selected':''}}>Active</option>
                                <option value="0" {{$subCategory->status == '0'?'selected':''}}>InActive</option>
                            </select>
                        </div>

                    </div>


                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">


                            <div>
                                <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

