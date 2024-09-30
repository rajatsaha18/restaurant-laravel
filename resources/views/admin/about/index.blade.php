@extends('admin.layouts.master')

@section('title')
About Us
@endsection

@section('content')
<div class="col-lg-12">
    <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> About us</h4>
    <div class="card">
        <div class="card-body">

            <form action="{{route('admin.about.new')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Title</label>
                            {{-- <input type="text" name="name" class="form-control" placeholder="name"/> --}}
                            
                            @if (!empty($about))
                            <input type="text" name="name" value="{{$about->name}}" class="form-control" placeholder="name"/>
                            @else
                            <input type="text" name="name" class="form-control" placeholder="name"/>
                            
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Description</label>
                            {{-- <textarea name="description" class="form-control" placeholder="Description"></textarea> --}}
                            
                            @if (!empty($about))
                            <textarea name="description" class="form-control" placeholder="Description">{{$about->description}}</textarea>
                            @else
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Best Quality Description</label>
                            {{-- <textarea name="description" class="form-control" placeholder="Description"></textarea> --}}

                            @if (!empty($about))
                            <textarea name="best_quality_description" class="form-control" placeholder="Description">{{$about->best_quality_description}}</textarea>
                            @else
                            <textarea name="best_quality_description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-password-input">Qualify chef Description</label>
                            {{-- <textarea name="description" class="form-control" placeholder="Description"></textarea> --}}

                            @if (!empty($about))
                            <textarea name="qualify_chef_description" class="form-control" placeholder="Description">{{$about->qualify_chef_description}}</textarea>
                            @else
                            <textarea name="qualify_chef_description" class="form-control" placeholder="Description"></textarea>

                            @endif

                        </div>
                    </div>
                    
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formrow-password-input">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                            @if (!empty($about))
                            <img src="{{asset($about->image)}}" alt="discount-img" height="70px" width="90px"/>

                            @endif

                        </div>
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn w-md" style="background: #2A3042!important; color:#2ecc71"><i class="fa-solid fa-circle-arrow-up"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection
