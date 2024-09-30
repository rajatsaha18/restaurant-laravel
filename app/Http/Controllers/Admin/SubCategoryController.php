<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $subcategories;
    private $subcategory;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.subcategory.index',['categories' => $this->categories]);
    }
    public function manage()
    {
        $this->subcategories = SubCategory::where('status',1)->get();
        return view('admin.subcategory.manage',['subCategories' => $this->subcategories]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'image'     => 'required',
        ]);
        SubCategory::newSubCategory($request);
        return redirect('/manage-subcategory')->with('message', 'Subcategory create successfully');
    }
    public function edit($id)
    {
        $this->categories  = Category::where('status', 1)->get();
        $this->subcategory = SubCategory::find($id);
        return view('admin.subcategory.edit',
        [
            'subCategory'   => $this->subcategory,
            'categories'    => $this->categories,
        ]);
    }
    public function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/manage-subcategory')->with('message', 'Subcategory update successfully');

    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-subcategory')->with('message', 'Subcategory delete successfully');

    }
}
