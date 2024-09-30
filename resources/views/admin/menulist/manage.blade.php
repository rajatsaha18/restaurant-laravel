@extends('admin.layouts.master')

@section('title')
MenuList Manage
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Manage Menulist</h4>
                <a href="{{route('menulist.add')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-folder-plus"></i> Add Menulist</button></a>


                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @php
                        use Illuminate\Support\Str;
                        @endphp

                        @foreach ($menuLists as $menuList)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset($menuList->image)}}" alt="category-image" height="70px" width="90px"></td>
                            <td>
                                @if ($menuList->status == 1)
                                <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                <span class="badge rounded-pill bg-danger">Inactive</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{ route('menulist.edit',$menuList->id) }}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('menulist.delete',$menuList->id) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
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
