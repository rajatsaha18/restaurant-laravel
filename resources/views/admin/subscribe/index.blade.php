@extends('admin.layouts.master')

@section('title')
Subscribe
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Subscribe</h4>



                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($subscribe as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->email}}</td>

                            <td>

                                <a href="{{route('subscribe.delete',$item->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
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
