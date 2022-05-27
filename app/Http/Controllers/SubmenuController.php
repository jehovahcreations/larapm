<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Mainmenu;


class SubmenuController extends Controller
{

    function table()
    {
        // return $id;
        $table = Submenu::get();
       // $menu = Submenu::get();
        return view('admin.submenu.table')->with('table', $table);
    }
    function create()
    {
        $table = Menu::get();
       // dd($table);
        return view('admin.submenu.create')->with('table', $table);
    }
    function deactive($id)
    {
        $login = Submenu::find($id);
        $login->isActive = 2;
        $login->save();
        $table = Submenu::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.submenu.table')->with('table', $table);
    }
    function active($id)
    {
        $login = Submenu::find($id);
        $login->isActive = 1;
        $login->save();
        $table = Submenu::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.submenu.table')->with('table', $table);
    }
    function delete($id)
    {
        Submenu::destroy($id);
        $table = Submenu::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.submenu.table')->with('table', $table);
    }
    function addsubmenu(Request $request)
    {

        $user = new Submenu();
        $user->mainmenu = $request['mainmenu'];
        $user->menuName = $request->menuName;
        $user->menuID = $request['menuID'];
        $user->image = $request['image'];
        $user->url = $request['url'];
        $user->points = intval($request['points']);
        $user->dataurl = $request->dataurl;
        $user->field1 = $request['field1'];
        $user->field2 = $request['field2'];
        $user->field3 = $request['field3'];
        $user->field4 = $request['field4'];
        $user->field5 = $request['field5'];
        $user->formid = intval($request['formid']);
        $user->vendor = $request['vendor'];
        $user->amount = intval($request['amount']);
        $user->isActive = 1;
        $user->save();
        $table = Submenu::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.submenu.table')->with('table', $table);
    }
    function edit($id)
    {
        $table = Submenu::find($id);
        return view('admin.submenu.edit')->with('table', $table);
    }
    function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = base64_encode(file_get_contents($request->file('image')));
            $update = Submenu::find($request['id']);
            $update->name = $request['name'];
            $update->url = $request['url'];
            $update->image = $image;
            $update->save();
        } else {
            $update = Submenu::find($request['id']);
            $update->name = $request['name'];
            $update->url = $request['url'];
            $update->image = $request['img'];
            $update->save();
        }
        $table = Submenu::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.submenu.table')->with('table', $table);
    }
}
