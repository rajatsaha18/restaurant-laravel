<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileAdmin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $profile = ProfileAdmin::first();
        return view('admin.home.home');
    }
}
