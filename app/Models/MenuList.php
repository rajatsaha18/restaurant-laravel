<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuList extends Model
{
    use HasFactory;
    private static $menuList;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'brand-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newMenuList($request)
    {
        self::$menuList = new MenuList();
        self::$menuList->image  = self::getImageUrl($request->file('image'));
        self::$menuList->status = $request->status;
        self::$menuList->save();
    }
    public static function updateMenuList($request,$id)
    {
        self::$menuList = MenuList::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$menuList->image))
            {
                unlink(self::$menuList->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$menuList->image;
        }
        self::$menuList->image  = self::$imageUrl;
        self::$menuList->status = $request->status;
        self::$menuList->save();
    }

    public static function deleteMenuList($id)
    {
        self::$menuList = MenuList::find($id);
        if(file_exists(self::$menuList->image))
        {
            unlink(self::$menuList->image);
        }
        self::$menuList->delete();

    }
}
