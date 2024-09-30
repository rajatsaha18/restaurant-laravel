<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuList;
use Illuminate\Http\Request;

class MenuListController extends Controller
{
    private $menuList;
    public function manage()
    {
        $this->menuList = MenuList::where('status',1)->get();
        return view('admin.menulist.manage',[
            'menuLists' => $this->menuList,
        ]);
    }
    public function index()
    {
        return view('admin.menulist.index');
    }
    public function create(Request $request)
    {
        MenuList::newMenuList($request);
        return redirect('/menulist-manage')->with('message', 'Data Save Successfully');

    }
    public function edit($id)
    {
        $this->menuList = MenuList::find($id);
        return view('admin.menulist.edit',[
            'menuList' => $this->menuList,
        ]);


    }

    public function update(Request $request, $id)
    {
        MenuList::updateMenuList($request,$id);
        return redirect('/menulist-manage')->with('message', 'Data Update Successfully');

    }

    public function delete($id)
    {
        MenuList::deleteMenuList($id);
        return redirect('/menulist-manage')->with('message', 'Data Delete Successfully');
    }
}
