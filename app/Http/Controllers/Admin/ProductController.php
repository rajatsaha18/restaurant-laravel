<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    private $subCategory;
    private $product;
    public function index()
    {
        $this->category         = Category::all();
        $this->subCategory      = SubCategory::all();
        return view('admin.product.index',
        [
            'categories'    => $this->category,
            'subCategories' => $this->subCategory,
        ]);
    }

    public function getSubCategory()
    {
        $categoryId     = $_GET['id'];
        $subCategories  = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subCategories);
    }
    public function manage()
    {
        $this->product = Product::where('status',1)->get();
        return view('admin.product.manage',['products' => $this->product]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'category_id'           => 'required',
            'name'                  => 'required',
            'price'                 => 'required',
            'preparation_time'      => 'required',
            'product_type'          => 'required',
            'product_value'         => 'required',

        ]);
        Product::newProduct($request);
        return redirect('/manage-product')->with('message', 'Product Save Successfully');

    }

    public function edit($id)
    {
        $this->product          = Product::find($id);
        $this->category         = Category::all();
        $this->subCategory      = SubCategory::all();
        return view('admin.product.edit',[
            'product'           => $this->product,
            'categories'        => $this->category,
            'subCategories'     => $this->subCategory,
        ]);
    }

    public function update(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message', 'Product Update Successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product Delete Successfully');
    }
}
