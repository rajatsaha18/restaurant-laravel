<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    private static $teamMember;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'team-member-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newTeamMember($request)
    {
        self::$teamMember = new TeamMember();
        self::$teamMember->name                 = $request->name;
        self::$teamMember->designation          = $request->designation;
        self::$teamMember->description          = $request->description;
        self::$teamMember->chefsabout           = $request->chefsabout;
        self::$teamMember->phone                = $request->phone;
        self::$teamMember->email                = $request->email;
        self::$teamMember->fakebook             = $request->fakebook;
        self::$teamMember->twitter              = $request->twitter;
        self::$teamMember->instagram            = $request->instagram;
        self::$teamMember->linkedin             = $request->linkedin;
        self::$teamMember->image                = self::getImageUrl($request->file('image'));
        self::$teamMember->status               = $request->status;
        self::$teamMember->save();
    }
    public static function updateTeamMember($request,$id)
    {
        self::$teamMember = TeamMember::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$teamMember->image))
            {
                unlink(self::$teamMember->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$teamMember->image;
        }

        self::$teamMember->name          = $request->name;
        self::$teamMember->designation   = $request->designation;
        self::$teamMember->description   = $request->description;
        self::$teamMember->chefsabout    = $request->chefsabout;
        self::$teamMember->phone         = $request->phone;
        self::$teamMember->email         = $request->email;
        self::$teamMember->fakebook      = $request->fakebook;
        self::$teamMember->twitter       = $request->twitter;
        self::$teamMember->instagram     = $request->instagram;
        self::$teamMember->linkedin      = $request->linkedin;
        self::$teamMember->image         = self::$imageUrl;
        self::$teamMember->status        = $request->status;
        self::$teamMember->save();
    }

    public static function deleteTeamMember($id)
    {
        self::$teamMember = TeamMember::find($id);
        if(file_exists(self::$teamMember->image))
        {
            unlink(self::$teamMember->image);
        }
        self::$teamMember->delete();
    }
}
