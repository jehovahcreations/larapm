<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Datalist;
use App\Models\Data;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    function index()
    {

        $data = Data::get();
        return $data;
    }
    function dashboard()
    {
        $table = Data::get();
        return $table;
    }
    function table()
    {
        $table = Data::where('created_by',Auth::id())->orderBy('created_at','desc')->get();
        return view('admin.menu.table')->with('table', $table);
    }

    function deactive($id)
    {
        $login = Data::find($id);
        $login->isActive = 2;
        $login->save();
        $table = Data::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.Data.table')->with('table', $table);
    }
    function active($id)
    {
        $login = Data::find($id);
        $login->isActive = 1;
        $login->save();
        $table = Data::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.Data.table')->with('table', $table);
    }
    function delete($id)
    {
        Data::destroy($id);
        $table = Data::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.Data.table')->with('table', $table);
    }
    function create1(Request $request){
        return ('successForm is successfully submitted!');
    }
    function addmenu(Request $request)
    {
    //    // $image = base64_encode(file_get_contents($request->file('image')));
    //     $user = new Data();
    //     $user->vid = $request['vid'];
    //     $user->name = $request['name'];
    //     $user->dob = $request['dob'];
    //     $user->gender = $request['gender'];
    //     $user->data = $request['data'];
    //     $user->isActive = 1;
    //     $user->save();
    //     $table = Data::where("_id",$user->id)->get();
    //     // Session::flash('message', 'Saved Successfully!');
    //     // Session::flash('alert-class', 'alert-success');
    //      return view('admin.menu.create')->with('table', $table);
   $user = Data::create([
        'name' => $request->name,
        'vid' => $request->vid,
        'dob' => $request->dob,
        'data' => $request->data,
        'gender' => $request->gender,
        'mother'=>$request->mother,
        'email'=>$request->email,
        'cate' => $request->cate,
        'type' => $request->type,
        'village' => $request->village,
        'interest' => $request->interest,
        'occupation' => $request->occupation,
        'mobile'=>$request->mobile,
        'address' => $request->address,
        'pin' => $request->pin,
        'ptype'=>$request->ptype,

        'created_by'=>Auth::id()
      ]);
    //return $user->vid;
      return view('admin.menu.aa')->with('vid', $user->vid)->with('id',$user->id);
    }
    function edit($id)
    {
        $table = Data::find($id);
        return view('admin.Data.edit')->with('table', $table);
    }
    function addimage(Request $request){
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);

           $name = $request->file('addar')->getClientOriginalName();
           $path = $request->file('addar')->store('public/images');


           $save = new Image;
           $save->name = $name;
           $save->path = $path;
           $save->save();

           return view('admin.menu.aa');

       }


    function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = base64_encode(file_get_contents($request->file('image')));
            $update = Data::find($request['id']);
            $update->name = $request['name'];
            $update->decp = $request['decp'];
            $update->image = $image;
            $update->save();
        } else {
            $update = Data::find($request['id']);
            $update->name = $request['name'];
            $update->decp = $request['decp'];
            $update->image = $request['img'];
            $update->save();
        }
        $table = Data::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.Data.table')->with('table', $table);
    }
}
