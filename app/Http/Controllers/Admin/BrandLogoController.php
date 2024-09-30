<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandAdmin;
use App\Models\Test;
use Illuminate\Http\Request;

class BrandLogoController extends Controller
{
    private $brands;
    private $brand;
    public function index()
    {
        $this->brands = BrandAdmin::where('status',1)->get();
        return view('admin.brand.manage',['brands' => $this->brands]);
    }
    public function add()
    {
        return view('admin.brand.index');
    }
    public function create(Request $request)
    {
        BrandAdmin::newBrand($request);
        return redirect('/brand-logo')->with('message', 'Data Save Successfully');
    }
    public function edit($id)
    {
        $this->brand = BrandAdmin::find($id);
        return view('admin.brand.edit',['brand' => $this->brand ]);

    }
    public function update(Request $request,$id)
    {
        BrandAdmin::updateBrand($request,$id);
        return redirect('/brand-logo')->with('message', 'Data Update Successfully');

    }
    public function delete($id)
    {
        BrandAdmin::deleteBrand($id);
        return redirect('/brand-logo')->with('message', 'Data Update Successfully');

    }
}
