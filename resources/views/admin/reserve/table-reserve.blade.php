@extends('admin.layouts.master')

@section('title')
Table Reserve
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- @if(Session::has('message'))
            <h4 class="text-center alert alert-success">{{Session::get('message')}}</h4>
            @endif --}}
            <div class="card-body">

                <h4 class="card-title text-center mb-5 text-bold" style="font-size: 20px!important; color:black">Table Reserve</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Person</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($tables as $table)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$table->name}}</td>
                            <td>{{$table->number}}</td>
                            <td>{{$table->email}}</td>
                            <td>{{$table->time}}</td>
                            <td>{{$table->date}}</td>
                            <td>{{$table->people}}</td>

                            <td>
                                <a href="{{route('table.delete',$table->id)}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are your sure Delete This ?')"><i class="fa fa-trash"></i></a>
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
