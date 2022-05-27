<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Youtube;


class YoutubeController extends Controller
{

    function table()
    {
        // return $id;
        $table = Youtube::get();
        return view('frontend.youtube.table')->with('table', $table);
    }
    function deactive($id)
    {
        $login = Youtube::find($id);
        $login->is_Active = 2;
        $login->save();
        $table = Youtube::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.youtube.table')->with('table', $table);
    }
    function active($id)
    {
        $login = Youtube::find($id);
        $login->is_Active = 1;
        $login->save();
        $table = Youtube::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.youtube.table')->with('table', $table);
    }
    function delete($id)
    {
        Youtube::destroy($id);
        $table = Youtube::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.youtube.table')->with('table', $table);
    }
    function addabout(Request $request)
    {
        $image = base64_encode(file_get_contents($request->file('image')));
        $user = new Youtube();
        $user->name = $request['name'];
        $user->url = $request['url'];
        $user->is_Active = 1;
        $user->image = $image;
        $user->save();
        $table = Youtube::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.youtube.table')->with('table', $table);
    }
    function edit($id)
    {
        $table = Youtube::find($id);
        return view('frontend.youtube.edit')->with('table', $table);
    }
    function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = base64_encode(file_get_contents($request->file('image')));
            $update = Youtube::find($request['id']);
            $update->name = $request['name'];
            $update->url = $request['url'];
            $update->image = $image;
            $update->save();
        } else {
            $update = Youtube::find($request['id']);
            $update->name = $request['name'];
            $update->url = $request['url'];
            $update->image = $request['img'];
            $update->save();
        }
        $table = Youtube::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.youtube.table')->with('table', $table);
    }
}
