<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogAdmin extends Model
{
    use HasFactory;
    private static $blog;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'blog-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newBlog($request)
    {
        $date = date("d-m-Y", strtotime($request->date));
        self::$blog = new BlogAdmin();
        self::$blog->name               = $request->name;
        self::$blog->date               = $date;
        self::$blog->description        = $request->description;
        self::$blog->image              = self::getImageUrl($request->file('image'));
        self::$blog->status             = $request->status;
        self::$blog->save();
    }
    public static function updateBlog($request,$id)
    {
        self::$blog = BlogAdmin::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        $date = date("d-m-Y", strtotime($request->date));
        self::$blog->name               = $request->name;
        self::$blog->date               = $date;
        self::$blog->description        = $request->description;
        self::$blog->image              = self::$imageUrl;
        self::$blog->status             = $request->status;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = BlogAdmin::find($id);
        if(file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
