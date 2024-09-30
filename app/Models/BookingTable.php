<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTable extends Model
{
    use HasFactory;
    // private static $tableBooking;
    // private static $date;
    // private static $time;

    // public static function newTable($request)
    // {
    //     self::$date = date("d-m-Y", strtotime($request->date));
    //     self::$time = date("h:i A", strtotime($request->time));

    //     self::$tableBooking = new BookingTable();
    //     self::$tableBooking->name       = $request->name;
    //     self::$tableBooking->number     = $request->number;
    //     self::$tableBooking->email      = $request->email;
    //     self::$tableBooking->people     = $request->people;
    //     self::$tableBooking->date       = self::$date;
    //     self::$tableBooking->time       = self::$time;
    //     self::$tableBooking->message    = $request->message;
    //     self::$tableBooking->save();
    // }
}
