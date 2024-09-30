<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory;
    private static $subcategories;
    private static $imageName;
    private static $directory;
    private static $imageUrl;


    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'subcategory-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newSubCategory($request)
    {
        self::$subcategory = new SubCategory();
        self::$subcategory->category_id    = $request->category_id;
        self::$subcategory->name           = $request->name;
        self::$subcategory->description    = $request->description;
        self::$subcategory->image          = self::getImageUrl($request->file('image'));
        self::$subcategory->status         = $request->status;
        self::$subcategory->save();
    }



    public static function updateSubCategory($request, $id)
    {
        self::$subcategory = SubCategory::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$subcategory->image))
            {
                unlink(self::$subcategory->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$subcategory->image;
        }
        self::$subcategory->category_id     = $request->category_id;
        self::$subcategory->name            = $request->name;
        self::$subcategory->description     = $request->description;
        self::$subcategory->image           = self::$imageUrl;
        self::$subcategory->status          = $request->status;
        self::$subcategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subcategory = SubCategory::find($id);
        if(file_exists(self::$subcategory->image))
        {
            unlink(self::$subcategory->image);
        }
        self::$subcategory->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
