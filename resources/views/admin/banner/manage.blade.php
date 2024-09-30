@extends('admin.layouts.master')

@section('title')
Category
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Manage Category</h4>
                <a href="{{route('category.add')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-folder-plus"></i> Add Category</button></a>


                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>About</th>
                        <th>Gallery</th>
                        <th></th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        <!-- @foreach ($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>
                            <td><img src="{{asset($category->image)}}" alt="category-image" height="70px" width="90px"></td>
                            <td>
                                @if ($category->status == 1)
                                <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                <span class="badge rounded-pill bg-danger">Inactive</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('category.delete',$category->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
                            </td>

                        </tr>

                        @endforeach -->


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

{{-- <div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            @if(Session::has('message'))
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            @endif

            <div class="card-body">
                <h4 class="card-title mb-4 text-center text-bold" style="font-size: 20px!important; color:#109749">Add Category Form</h4>

                <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="{{$item->name}}" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Category Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">
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
                            <div class="custom-control custom-checkbox mb-4">
                                <input type="checkbox" class="custom-control-input" id="horizontal-customCheck">
                                <label class="custom-control-label" for="horizontal-customCheck">Remember me</label>
                            </div>

                            <div>
                                <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection
