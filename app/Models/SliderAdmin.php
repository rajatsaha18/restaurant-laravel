<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderAdmin extends Model
{
    use HasFactory;

    private static $slider;
    private static $sliders;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'slider-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newSlider($request)
    {
        self::$slider = new SliderAdmin();
        self::$slider->name           = $request->name;
        self::$slider->description    = $request->description;
        self::$slider->image          = self::getImageUrl($request->file('image'));
        self::$slider->status         = $request->status;
        self::$slider->save();

    }

    public static function updateSlider($request,$id)
    {
        self::$slider = SliderAdmin::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$slider->image;
        }
        self::$slider->name           = $request->name;
        self::$slider->description    = $request->description;
        self::$slider->image          = self::$imageUrl;
        self::$slider->status         = $request->status;
        self::$slider->save();

    }

    public static function deleteSlider($id)
    {
        self::$slider = SliderAdmin::find($id);
        if(file_exists(self::$slider))
        {
            unlink(self::$slider->image);
        }
        self::$slider->delete();
    }


}
