<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribe = Subscribe::all();
        return view('admin.subscribe.index',compact('subscribe'));
    }

    public function delete($id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->delete();
        return redirect()->back()->with('message', 'Data delete successfully');

    }
}
