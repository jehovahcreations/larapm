<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\User;
use App\Models\Mainmenu;
use Illuminate\Support\Facades\Hash;


class StaffController extends Controller
{

    function table()
    {
        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        return view('admin.user.staff.table')->with('table', $table);
    }
    function view($id)
    {
        $table = User::where('_id',$id)->get();

        return view('admin.user.staff.view')->with('table', $table[0]);
    }
    function create()
    {
        $table = User::where('role','fran')->get();
        return view('admin.user.staff.create')->with('table', $table);
    }
    function deactive($id)
    {
        $login = User::find($id);
        $login->isActive = 2;
        $login->save();
        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.staff.table')->with('table', $table);
    }
    function active($id)
    {
        $login = User::find($id);
        $login->isActive = 1;
        $login->save();
        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.staff.table')->with('table', $table);
    }
    function demo($id)
    {
        $login = User::find($id);
        $login->demo = 2;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.staff.table')->with('table', $table);
    }
    function paid($id)
    {
        $login = User::find($id);
        $login->demo = 1;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.staff.table')->with('table', $table);
    }
    function delete($id)
    {
        User::destroy($id);
        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.user.staff.table')->with('table', $table);
    }

    function addsubmenu(Request $request)
    {
       // dd($request);
       $password = Hash::make($request->password);
        $adressproof = base64_encode(file_get_contents($request->file('adressproof')));
        $idproof = base64_encode(file_get_contents($request->file('idproof')));
        $photo = base64_encode(file_get_contents($request->file('photo')));
        $signature = base64_encode(file_get_contents($request->file('signature')));
        $user = new User();
        $user->phone = $request['phone'];
        $user->password = $password;
        $user->role = 'Emp';
        $user->addType = 'Aadhaar Card';
        $user->idType = 'Pan Card';
        $user->parent = $request['parent'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->bank = $request['bank'];
        $user->account = $request['account'];
        $user->ifsc = $request['ifsc'];
        $user->isActive = 1;
        $user->adressproof = $adressproof;
        $user->idproof = $idproof;
        $user->photo = $photo;
        $user->signature = $signature;
        $user->save();
        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.staff.table')->with('table', $table);
    }
    function edit($id)
    {
        $table = User::where('role', 'fran')->get();
        $data = User::find($id);
        return view('admin.user.staff.edit')->with('table', $table)->with('data',$data);
    }
    function update(Request $request)
    {
        if ($request->hasFile('adressproof')){
        $adressproof = base64_encode(file_get_contents($request->file('adressproof')));
        }else{
        $adressproof = $request->adressproof1;
        }
        if ($request->hasFile('idproof')) {
            $idproof = base64_encode(file_get_contents($request->file('idproof')));
        } else {
            $idproof = $request->idproof1;
        }
        if ($request->hasFile('photo')) {
            $photo = base64_encode(file_get_contents($request->file('photo')));
        } else {
            $photo = $request->photo1;
        }
        if ($request->hasFile('signature')) {
            $signature = base64_encode(file_get_contents($request->file('signature')));
        } else {
            $signature = $request->signature1;
        }

        $user = User::find($request['id']);
        $user->phone = $request['phone'];
        $user->role = 'Emp';
        $user->addType = 'Aadhaar Card';
        $user->idType = 'Pan Card';
        $user->parent = $request['parent'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->bank = $request['bank'];
        $user->account = $request['account'];
        $user->ifsc = $request['ifsc'];
        $user->isActive = 1;
        $user->adressproof = $adressproof;
        $user->idproof = $idproof;
        $user->photo = $photo;
        $user->signature = $signature;
            $user->save();

        $table = User::select('phone','parent','name','email','isActive')->where('role', 'Emp')->get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.user.staff.table')->with('table', $table);
    }
}
