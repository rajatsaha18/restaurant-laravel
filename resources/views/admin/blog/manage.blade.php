@extends('admin.layouts.master')

@section('title')
Blog
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- @if(Session::has('message'))
            <h4 class="text-center alert alert-success">{{Session::get('message')}}</h4>
            @endif --}}
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Manage Blog</h4>
                <a href="{{route('blog.add')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-folder-plus"></i> Add Blog</button></a>


                <table id="datatable" class="table table-bordered table-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th width="10%">Sl</th>
                        <th width="20%">Action</th>
                        <th width="10%">Name</th>
                        <th width="10%">Date</th>
                        <th width="10%">Image</th>
                        <th width="20%">Status</th>

                    </tr>
                    </thead>


                    <tbody>
                        @php
                        use Illuminate\Support\Str;
                        @endphp

                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('blog.delete',$blog->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
                            </td>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->date}}</td>
                            {{-- <td>{!!Str::limit($blog->description, 200, '...') !!}</td> --}}
                            <td><img src="{{asset($blog->image)}}" alt="category-image" height="40px" width="40px"></td>
                            <td>
                                @if ($blog->status == 1)
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
