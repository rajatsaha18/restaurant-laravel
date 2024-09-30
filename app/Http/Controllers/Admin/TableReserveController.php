<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingTable;
use Illuminate\Http\Request;
use Session;

class TableReserveController extends Controller
{
    public function index()
    {
        $tables = BookingTable::all();
        return view('admin.reserve.table-reserve',compact('tables'));
    }
    public function delete($id)
    {
        $table = BookingTable::find($id);
        $table->delete();
        return redirect()->back()->with('message', 'Table data delete successfully');
    }
}
