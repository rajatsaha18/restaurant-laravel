@extends('admin.layouts.master')

@section('title')
Edit Blog
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">

            <div class="card-body">
                <h4 class="card-title mb-5 text-center text-bold" style="font-size: 20px!important; color:black">Edit Team Meamber Form</h4>
                <a href="{{route('admin.team.member')}}"><button type="button" class="btn mb-3" style="background-color: #2c3e50; color:#2ecc71;"><i class="fa-solid fa-list-check"></i> Manage Team Meamber</button></a>

                <form action="{{route('team.member.update',$teamMember->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Member Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" value="{{ $teamMember->name }}" id="horizontal-firstname-input" placeholder="Member Name">
                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                        <label for="horizontal-designation-input" class="col-sm-3 col-form-label">Member Designation</label>
                        <div class="col-sm-9">
                          <input type="text" name="designation" value="{{ $teamMember->designation }}" class="form-control" id="horizontal-designation-input" placeholder="Member Designation">
                          <span class="text-danger">{{$errors->has('designation') ? $errors->first('designation') : ''}}</span>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-description-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="description" id="editor1" class="form-control">{!! $teamMember->description !!}"</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-chefsabout-input" class="col-sm-3 col-form-label">Chef's About</label>
                        <div class="col-sm-9">
                          <textarea name="chefsabout" id="editor2" class="form-control">{!! $teamMember->chefsabout !!}</textarea>
                        </div>
                    </div>

                    
                    
                    <div class="form-group row mb-4">
                        <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                          <input type="text" name="phone" class="form-control" id="horizontal-phone-input" placeholder="Member Phone">
                          <span class="text-danger">{{$errors->has('phone') ? $errors->first('phone') : ''}}</span>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" name="email" class="form-control" id="horizontal-email-input" placeholder="Member Email">
                          <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-facebook-input" class="col-sm-3 col-form-label">Facebook</label>
                        <div class="col-sm-9">
                          <input type="text" name="fakebook" class="form-control" id="horizontal-facebook-input" placeholder="Facebook Link">
                          <span class="text-danger">{{$errors->has('fakebook') ? $errors->first('fakebook') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-twitter-input" class="col-sm-3 col-form-label">Twitter</label>
                        <div class="col-sm-9">
                          <input type="text" name="twitter" class="form-control" id="horizontal-twitter-input" placeholder="Twitter Link">
                          <span class="text-danger">{{$errors->has('twitter') ? $errors->first('twitter') : ''}}</span>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                        <label for="horizontal-instagram-input" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                          <input type="text" name="instagram" class="form-control" id="horizontal-instagram-input" placeholder="Instagram Link">
                          <span class="text-danger">{{$errors->has('instagram') ? $errors->first('instagram') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-linkedin-input" class="col-sm-3 col-form-label">Linkedin</label>
                        <div class="col-sm-9">
                          <input type="text" name="linkedin" class="form-control" id="horizontal-linkedin-input" placeholder="Linkedin Link">
                          <span class="text-danger">{{$errors->has('linkedin') ? $errors->first('linkedin') : ''}}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Blog Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="horizontal-email-input">
                            <img src="{{asset($teamMember->image)}}" alt="blog-image" height="70px" width="90px"/>
                            <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ''}}</span>

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$teamMember->status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0" {{$teamMember->status == 0 ? 'selected' : ''}}>InActive</option>
                            </select>
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

<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');

</script>
@endsection
