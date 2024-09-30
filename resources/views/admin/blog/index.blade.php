@extends('admin.layouts.master')

@section('title')
Add Blog
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">

            <div class="card-body">
                <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black">Add Blog Form</h4>
                <a href="{{route('admin.blog')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-list-check"></i> Manage Blog</button></a>

                <form action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Blog Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Blog Date</label>
                        <div class="col-sm-9">
                          <input type="date" name="date" class="form-control" id="horizontal-firstname-input">
                          <span class="text-danger">{{$errors->has('date') ? $errors->first('date') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="summernote" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Blog Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">
                            <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>

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
