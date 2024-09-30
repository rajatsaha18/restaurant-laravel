<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadPdfController extends Controller
{
    public function index()
    {
        $filePath = public_path('files/pdf-1.pdf');
        return response()->download($filePath);
    }
}
