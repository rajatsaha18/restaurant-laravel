@extends('admin.layouts.master')

@section('title')
Team Member
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- @if(Session::has('message'))
            <h4 class="text-center alert alert-success">{{Session::get('message')}}</h4>
            @endif --}}
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Manage Team Member</h4>
                <a href="{{route('team.member.add')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-folder-plus"></i> Add Team Member</button></a>


                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @php
                        use Illuminate\Support\Str;
                        @endphp

                        @foreach ($teamMembers as $member)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->email}}</td>
                            {{-- <td>{!!Str::limit($member->description, 200, '...') !!}</td> --}}
                            <td><img src="{{asset($member->image)}}" alt="category-image" height="70px" width="90px"></td>
                            <td>
                                @if ($member->status == 1)
                                <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                <span class="badge rounded-pill bg-danger">Inactive</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{route('team.member.edit',$member->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('team.member.delete',$member->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
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
