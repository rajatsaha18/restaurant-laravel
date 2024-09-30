@extends('admin.layouts.master')

@section('title')
Profile
@endsection

@section('content')
<div class="row ">
    <div class="col-md-6 mx-auto">
        <div class="card shadow">

            <div class="card-body">
                <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black"><i class="fa-solid fa-address-card"></i> Profile</h4>


                <form action="{{route('profile.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            @if (!empty($profile))
                            <input type="text" name="name" value="{{$profile->name}}" class="form-control" id="horizontal-firstname-input">
                            @else
                            <input type="text" name="name" class="form-control" id="horizontal-firstname-input">

                            @endif

                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            @if (!empty($profile))
                            <input type="email" name="email" value="{{$profile->email}}" class="form-control" id="horizontal-firstname-input">
                            @else
                            <input type="email" name="email" class="form-control" id="horizontal-firstname-input">

                            @endif

                          <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            @if (!empty($profile))
                            <input type="mobile" name="mobile" value="{{$profile->mobile}}" class="form-control" id="horizontal-firstname-input">
                            @else
                            <input type="mobile" name="mobile" class="form-control" id="horizontal-firstname-input">

                            @endif

                          <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">

                            @if (!empty($profile))
                            <input type="file" name="image" class="form-control" id="horizontal-firstname-input"/>
                            <img src="{{asset($profile->image)}}" alt="profile-img" height="70px" width="90px"/>
                            @else
                            <input type="file" name="image" class="form-control" id="horizontal-firstname-input"/>
                            @endif

                            <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>

                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">

                            <div>
                                <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
