<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Menulist;
use App\Models\About;
use App\Models\Applink;
use Illuminate\Support\Facades\DB;

class MenulistController extends Controller
{
  function index(){

      $menu = Menulist::get();
      return $menu;
  }
    function dashboard()
    {
        return view('dashboard');
    }
    function table(){
       // return $id;
    $table = About::get();
    return view('frontend.abouts.table')->with('table',$table);
    }
    function deactive($id)
    {
        $login = About::find($id);
        $login->is_Active = 2;
        $login->save();
        $table = About::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.abouts.table')->with('table', $table);
    }
    function active($id)
    {
        $login = About::find($id);
        $login->is_Active = 1;
        $login->save();
        $table = About::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.abouts.table')->with('table', $table);
    }
    function delete($id)
    {
        About::destroy($id);
        $table = About::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.abouts.table')->with('table', $table);
    }
    function addabout(Request $request)
    {
        $image = base64_encode(file_get_contents($request->file('image')));
        $user = new About();
        $user->name = $request['name'];
        $user->decp = $request['decp'];
        $user->is_Active = 1;
        $user->image = $image;
        $user->save();
        $table = About::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.abouts.table')->with('table', $table);
    }
    function edit($id)
    {
        $table =About::find($id);
        return view('frontend.abouts.edit')->with('table', $table);
    }
    function update(Request $request)
    {
        if ($request->hasFile('image')){
             $image = base64_encode(file_get_contents($request->file('image')));
             $update = About::find($request['id']);
             $update->name = $request['name'];
             $update->decp = $request['decp'];
             $update->image = $image;
             $update->save();
         }else{
            $update = About::find($request['id']);
            $update->name = $request['name'];
            $update->decp = $request['decp'];
            $update->image =$request['img'];
            $update->save();

         }
        $table = About::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.abouts.table')->with('table', $table);
    }
}
