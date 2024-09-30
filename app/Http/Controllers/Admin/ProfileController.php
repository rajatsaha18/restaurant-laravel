<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileAdmin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profile;
    private $imageName;
    private $directory;
    private $imageUrl;
    public function index()
    {
       $this->profile = ProfileAdmin::first();
        return view('admin.profile.index',['profile' => $this->profile]);
    }
    public function create(Request $request)
    {
        $this->profile = ProfileAdmin::first();
        if($this->profile)
        {
            $this->profile->name = $request->name;
            $this->profile->email = $request->email;
            $this->profile->mobile = $request->mobile;
            $profile_image = $request->file('image');
            if($profile_image)
            {
                $this->imageName = $profile_image->getClientOriginalName();
                $this->directory = 'profile-image/';
                $this->imageUrl = $this->directory.$this->imageName;
                $success = $profile_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->profile->image = $this->imageUrl;
                }
            }
            if($this->profile->update())
            {
                return redirect()->back()->with('message', 'Profile Update Successfully');
            }
            else
            {
                return redirect()->back()->with('message', 'something error');
            }
        }
        else
        {
            $this->profile = new ProfileAdmin();
            $this->profile->name = $request->name;
            $this->profile->email = $request->email;
            $this->profile->mobile = $request->mobile;
            $profile_image = $request->file('image');
            if($profile_image)
            {
                $this->imageName = $profile_image->getClientOriginalName();
                $this->directory = 'profile-image/';
                $this->imageUrl = $this->directory.$this->imageName;
                $success = $profile_image->move($this->directory,$this->imageName);
                if($success)
                {
                    $this->profile->image = $this->imageUrl;
                }
            }
            if($this->profile->save())
            {
                return redirect()->back()->with('message', 'Profile Save Successfully');
            }
            else
            {
                return redirect()->back()->with('message', 'something error');
            }

        }

    }
}
