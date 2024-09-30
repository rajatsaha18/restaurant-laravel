@extends('admin.layouts.master')

@section('title')
SubCategory | Manage
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- @if(Session::has('message'))
            <h4 class="text-center alert alert-success">{{Session::get('message')}}</h4>
            @endif --}}
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Manage Subcategory</h4>
                <a href="{{route('subCategory.add')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-folder-plus"></i> Add SubCategory</button></a>


                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Action</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>description</th>
                        <th>Image</th>
                        <th>Status</th>
                        
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($subCategories as $subCategory)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <a href="{{route('subCategory.edit',$subCategory->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('subCategory.delete',$subCategory->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
                            </td>
                            <td>{{$subCategory->category->name}}</td>
                            <td>{{$subCategory->name}}</td>
                            <td>{{$subCategory->description}}</td>
                            <td><img src="{{asset($subCategory->image)}}" alt="category-image" height="40px" width="40px"></td>
                            <td>
                                @if ($subCategory->status == 1)
                                <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                <span class="badge rounded-pill bg-danger">Inactive</span>

                                @endif
                            </td>
                            

                        </tr>

                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->


@endsection
