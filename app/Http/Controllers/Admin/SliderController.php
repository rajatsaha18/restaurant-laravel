<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderAdmin;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $sliders;
    private $slider;
    public function index()
    {
        $this->sliders = SliderAdmin::where('status', 1)->get();
        return view('admin.slider.manage',['sliders' => $this->sliders]);
    }
    public function create()
    {
        return view('admin.slider.index');
    }
    public function createSlider(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'image' => 'required',
        ]);
        SliderAdmin::newSlider($request);
        return redirect('/manage-slider')->with('message','Slider Save Successfully');

    }

    public function edit($id)
    {
        $this->slider = SliderAdmin::find($id);
        return view('admin.slider.edit',['slider' => $this->slider]);
    }
    public function update(Request $request,$id)
    {
        SliderAdmin::updateSlider($request,$id);
        return redirect('/manage-slider')->with('message','Slider Update Successfully');

    }
    public function delete($id)
    {
        SliderAdmin::deleteSlider($id);
        return redirect('/manage-slider')->with('message','Slider Delete Successfully');

    }
}
