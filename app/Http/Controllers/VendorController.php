<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\User;
use App\Models\Mainmenu;
use Illuminate\Support\Facades\Hash;


class VendorController extends Controller
{

    function table()
    {
        $table = User::select('phone', 'location', 'name', 'email', 'isActive')->where('role', 'vendor')->get();
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function view($id)
    {
        $table = User::where('_id', $id)->get();

        return view('admin.user.vendor.view')->with('table', $table[0]);
    }
    function create()
    {
        $table = User::where('role', 'vendor')->get();
        return view('admin.user.vendor.create')->with('table', $table);
    }
    function deactive($id)
    {
        $login = User::find($id);
        $login->isActive = 2;
        $login->save();
        $table = User::select('phone', 'location', 'name', 'email', 'isActive')->where('role', 'vendor')->get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function active($id)
    {
        $login = User::find($id);
        $login->isActive = 1;
        $login->save();
        $table = User::select('phone', 'location', 'name', 'email', 'isActive')->where('role', 'vendor')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function demo($id)
    {
        $login = User::find($id);
        $login->demo = 2;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function paid($id)
    {
        $login = User::find($id);
        $login->demo = 1;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function delete($id)
    {
        User::destroy($id);
        $table = User::select('phone', 'location', 'name', 'email', 'isActive')->where('role', 'vendor')->get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.vendor.table')->with('table', $table);
    }

    function addsubmenu(Request $request)
    {
        $password = Hash::make($request->password);
        $user = new User();
        $user->phone = $request['phone'];
        $user->role = 'vendor';
        $user->location = $request['location'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->account = $password;
        $user->isActive = 1;
        $user->save();
        $table = User::select('phone', 'location', 'name', 'email', 'isActive')->where('role', 'vendor')->get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.vendor.table')->with('table', $table);
    }
    function edit($id)
    {
        $table = User::where('role', 'vendor')->get();
        $data = User::find($id);
        return view('admin.user.vendor.edit')->with('table', $table)->with('data', $data);
    }
    function update(Request $request)
    {
        //dd($request);
        $user = User::find($request['id']);
        $user->phone = $request->phone;
        $user->role = 'vendor';
        $user->location = $request['location'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        $table = User::where('role', 'vendor')->get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.vendor.table')->with('table', $table);
    }
}
