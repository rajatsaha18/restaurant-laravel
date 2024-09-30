<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirmationMail;
use App\Models\BookingTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
// use Mail;

class BookingController extends Controller
{
    private $tableBooking;
    private $mailBody;
    public function bookTable()
    {
        return view('website.bookTable.booking-table');
    }
    public function createTable(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'number'    => 'required',
            'email'     => 'required',
            'people'    => 'required',
            'date'      => 'required',
            'time'      => 'required',
        ]);
        $date = date("d-m-Y", strtotime($request->date));
        $time = date("h:i A", strtotime($request->time));

        $this->tableBooking = new BookingTable();
        $this->tableBooking->name       = $request->name;
        $this->tableBooking->number     = $request->number;
        $this->tableBooking->email      = $request->email;
        $this->tableBooking->people     = $request->people;
        $this->tableBooking->date       = $date;
        $this->tableBooking->time       = $time;
        $this->tableBooking->message    = $request->message;
        $this->tableBooking->save();

        // $this->booking = BookingTable::newTable($request);





        /*================Mail Send===============*/
        $this->mailBody = [
            'title' => 'This is Piedradesol Restaurant',
            'body' => 'Your Table Book Successfully',

        ];
        Mail::to($this->tableBooking->email)->send(new OrderConfirmationMail($this->mailBody));
        /*================Mail Send===============*/
        return redirect()->back()->with('message','Table Booking Successfully');

    }
}
