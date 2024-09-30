<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutAdmin;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutAdmin::first();
        return view('admin.about.index',compact('about'));
    }
    public function create(Request $request)
    {
        $about = AboutAdmin::first();
        if($about)
        {
            $about->name                        = $request->name;
            $about->description                 = $request->description;
            $about->best_quality_description    = $request->best_quality_description;
            $about->qualify_chef_description    = $request->qualify_chef_description;
            $image                              = $request->file('image');
            if($image)
            {
                $imageName      = $image->getClientOriginalName();
                $directory      = 'about-image/';
                $imageUrl       = $directory.$imageName;
                $success        = $image->move($directory,$imageName);
                if($success)
                {
                    $about->image = $imageUrl;
                }
            }
            if($about->update())
            {
                return redirect()->back()->with('message','Data Update Successfully');
            }
        }
        else
        {
            $about = new AboutAdmin();
            $about->name                        = $request->name;
            $about->description                 = $request->description;
            $about->best_quality_description    = $request->best_quality_description;
            $about->qualify_chef_description    = $request->qualify_chef_description;
            $image                              = $request->file('image');
            if($image)
            {
                $imageName      = $image->getClientOriginalName();
                $directory      = 'about-image/';
                $imageUrl       = $directory.$imageName;
                $success        = $image->move($directory,$imageName);
                if($success)
                {
                    $about->image = $imageUrl;
                }
            }
            if($about->save())
            {
                return redirect()->back()->with('message','Data Save Successfully');
            }
        }
    }
}
