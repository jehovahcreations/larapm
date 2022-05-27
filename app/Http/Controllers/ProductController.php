<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    function table()
    {
        // return $id;
        $table = Product::get();
        return view('frontend.Product.table')->with('table', $table);
    }
    function deactive($id)
    {
        $login = Product::find($id);
        $login->is_Active = 2;
        $login->save();
        $table = Product::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.Product.table')->with('table', $table);
    }
    function active($id)
    {
        $login = Product::find($id);
        $login->is_Active = 1;
        $login->save();
        $table = Product::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.Product.table')->with('table', $table);
    }
    function delete($id)
    {
        Product::destroy($id);
        $table = Product::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.Product.table')->with('table', $table);
    }
    function addabout(Request $request)
    {
        $image = base64_encode(file_get_contents($request->file('image')));
        $user = new Product();
        $user->name = $request['name'];
        $user->desc = $request['desc'];
        $user->is_Active = 1;
        $user->image = $image;
        $user->save();
        $table = Product::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.Product.table')->with('table', $table);
    }
    function edit($id)
    {
        $table = Product::find($id);
        return view('frontend.Product.edit')->with('table', $table);
    }
    function update(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = base64_encode(file_get_contents($request->file('image')));
            $update = Product::find($request['id']);
            $update->name = $request['name'];
            $update->desc = $request['desc'];
            $update->image = $image;
            $update->save();
        } else {
            $update = Product::find($request['id']);
            $update->name = $request['name'];
            $update->desc = $request['desc'];
            $update->image = $request['img'];
            $update->save();
        }
        $table = Product::get();
        Session::flash('message', 'Saved Successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.Product.table')->with('table', $table);
    }
}
