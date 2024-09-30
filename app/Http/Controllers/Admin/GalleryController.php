<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    private $gallery;
    public function index()
    {
        $this->gallery = Gallery::where('status',1)->get();
        return view('admin.gallery.manage',['galleries' => $this->gallery]);
    }
    public function add()
    {
        return view('admin.gallery.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        Gallery::newGallery($request);
        return redirect('/gallery')->with('message', 'Gallery Save Successfully');
    }

    public function edit($id)
    {
        $this->gallery = Gallery::find($id);
        return view('admin.gallery.edit',['gallery' => $this->gallery]);

    }
    public function update(Request $request, $id)
    {
        Gallery::updateGallery($request,$id);
        return redirect('/gallery')->with('message', 'Gallery Update Successfully');

    }
    public function delete($id)
    {
        Gallery::deleteGallery($id);
        return redirect('/gallery')->with('message', 'Gallery Delete Successfully');

    }
}
