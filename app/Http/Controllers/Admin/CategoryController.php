<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
    private $categories;
    private $category;
    public function index()
    {
        return view('admin.category.index',);
    }
    public function manage()
    {
        $this->categories = Category::where('status', 1)->paginate(10);

        return view('admin.category.manage',['categories' => $this->categories]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'image' => 'required',
        ]);
        Category::newCategory($request);
        return redirect('/manage-category')->with('message', 'Category Save Successfully');
    }
    public function editCategory($id)
    {
        $item = Category::find($id);
        return view('admin.category.edit',compact('item'));

    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/manage-category')->with('message', 'Category Update Successfully');

    }

    public function deleteCategory($id)
    {
        Category::categoryDelete($id);

        return redirect()->back()->with('message','Category Delete Successfully');
    }
}
