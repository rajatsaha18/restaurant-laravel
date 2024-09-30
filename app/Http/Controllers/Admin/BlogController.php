<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogAdmin;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    private $blog;
    public function index()
    {
        $this->blog = BlogAdmin::where('status',1)->get();
        return view('admin.blog.manage',['blogs' => $this->blog]);
    }
    public function add()
    {
        return view('admin.blog.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            ]);
        BlogAdmin::newBlog($request);
        return redirect('/blog')->with('message', 'Blog Save Successfully');
    }

    public function edit($id)
    {
        $this->blog = BlogAdmin::find($id);
        return view('admin.blog.edit',['blog' => $this->blog]); 

    }
    public function update(Request $request, $id)
    {
        BlogAdmin::updateBlog($request,$id);
        return redirect('/blog')->with('message', 'Blog Update Successfully'); 

    }
    public function delete($id)
    {
        BlogAdmin::deleteBlog($id);
        return redirect('/blog')->with('message', 'Blog Delete Successfully'); 

    }
}
