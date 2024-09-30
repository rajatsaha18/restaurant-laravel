@extends('admin.layouts.master')

@section('title')
General Settings
@endsection

@section('content')
<div class="row">
    <!--Contact Settings-->
    <div class="col-lg-12">
        <h4 class="card-title mb-4">General Settings</h4>
        <h4 class="card-title mb-4"><i class="fa-solid fa-address-card"></i> Contact Settings</h4>
        <div class="card">
            <div class="card-body">


                <form action="{{route('general.contact')}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Email</label>
                                <input type="email" name="email" value="{{$contact->email}}" class="form-control" placeholder="Email" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Mobile</label>
                                <input type="mobile" name="mobile" value="{{$contact->mobile}}" class="form-control" placeholder="Mobile" id="formrow-password-input">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-inputCity">Facebook</label>
                                <input type="text" name="facebook" value="{{$contact->facebook}}" class="form-control" placeholder="facebook" id="formrow-inputCity">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-inputCity">LinkedIn</label>
                                <input type="text" name="linkedin" value="{{$contact->linkedin}}" class="form-control" placeholder="linkedin" id="formrow-inputCity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-inputCity">Youtube</label>
                                <input type="text" name="youtube" value="{{$contact->youtube}}" class="form-control" placeholder="youtube" id="formrow-inputCity">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-inputCity">Google Map</label>
                                <input type="text" name="google_map" value="{{$contact->google_map}}" class="form-control" placeholder="google map link" id="formrow-inputCity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="formrow-inputCity">Address</label>
                                @if($contact->address)
                                <textarea name="address" class="form-control" placeholder="address" id="formrow-inputCity">{{$contact->address}}</textarea>
                                @else
                                <textarea name="address" class="form-control" placeholder="address" id="formrow-inputCity"></textarea>
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

    <!--Website Settings-->
    <div class="col-lg-12">
        <h4 class="card-title mb-4"><i class="fa-regular fa-window-maximize"></i> Website Settings</h4>
        <div class="card">
            <div class="card-body">

                <form action="{{route('general.website')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Title for Title Bar</label>
                                @if (!empty($website))
                                <input type="text" name="title" value="{{$website->title}}" class="form-control" placeholder="Title" id="formrow-email-input">
                                @else
                                <input type="text" name="title"  class="form-control" placeholder="Title" id="formrow-email-input">

                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Discount</label>
                                @if (!empty($website))
                                <input type="text" name="main_discount" value="{{$website->main_discount}}" class="form-control" placeholder="Discount" id="formrow-email-input">
                                @else
                                <input type="text" name="main_discount"  class="form-control" placeholder="Discount" id="formrow-email-input">

                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Logo</label>
                                <input type="file" name="logo" class="form-control" placeholder="logo">
                                @if (!empty($website))
                                <img src="{{asset($website->logo)}}" alt="logo-img" height="70px" width="90px"/>

                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Favicon</label>
                                <input type="file" name="favicon" class="form-control" placeholder="Favicon">
                                @if (!empty($website))
                                <img src="{{asset($website->favicon)}}" alt="favicon-img" height="70px" width="90px"/>

                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Footer Logo</label>
                                <input type="file" name="footer_logo" class="form-control" placeholder="Footer logo">
                                @if (!empty($website))
                                <img src="{{asset($website->footer_logo)}}" alt="favicon-img" height="70px" width="90px"/>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Footer Background Image</label>
                                <input type="file" name="footer_back_img" class="form-control" placeholder="background image">
                                @if (!empty($website))
                                <img src="{{asset($website->footer_back_img)}}" alt="favicon-img" height="70px" width="90px"/>

                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="formrow-inputCity">Copyright</label>
                                @if (!empty($website))
                                <input type="text" name="copyright" value="{{$website->copyright}}" class="form-control" placeholder="copyright@" id="formrow-inputCity">
                                @else
                                <input type="text" name="copyright" class="form-control" placeholder="copyright@" id="formrow-inputCity">

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


</div>




@endsection
