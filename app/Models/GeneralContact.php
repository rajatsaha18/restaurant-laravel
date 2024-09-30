<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralContact extends Model
{
    use HasFactory;

    // private static $contact;

    // public static function newContact($request)
    // {
    //     self::$contact = GeneralContact::first();
    //     if(self::$contact)
    //     {
    //         self::$contact->email       = $request->email;
    //         self::$contact->mobile      = $request->mobile;
    //         self::$contact->facebook    = $request->facebook;
    //         self::$contact->linkedin    = $request->linkedin;
    //         self::$contact->youtube     = $request->youtube;
    //         self::$contact->google_map  = $request->google_map;
    //         self::$contact->update();
    //     }
    //     else
    //     {
    //         self::$contact = new GeneralContact();
    //         self::$contact->email       = $request->email;
    //         self::$contact->mobile      = $request->mobile;
    //         self::$contact->facebook    = $request->facebook;
    //         self::$contact->linkedin    = $request->linkedin;
    //         self::$contact->youtube     = $request->youtube;
    //         self::$contact->google_map  = $request->google_map;
    //         self::$contact->save();

    //     }

    // }
}
