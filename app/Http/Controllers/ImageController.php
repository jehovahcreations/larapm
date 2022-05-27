<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Finger;
use App\Models\Data;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    function create(Request $request){
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);


           $addar = $request->file('addar')->store('public/images');
           $addarb = $request->file('addarb')->store('public/images');
           $pan = $request->file('pan')->store('public/images');
           $pass = $request->file('pass')->store('public/images');


           $save = new Image;

           $save->addar = $addar;
           $save->addarb = $addarb;
           $save->pan = $pan;
           $save->pass = $pass;
           $save->uuis = $request->id;
           $save->vid = $request->vid;
           $save->created_by = Auth::id();
           $save->save();

           $table = Data::find($request->id);
           return view('admin.menu.create1')->with('table', $table);

       }
       function post(Request $request){
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);

        $user = Finger::create([
            'name' => $request->name,
            'vid' => $request->vid,
            'dob' => $request->dob,
            'data' => $request->data,
            'gender' => $request->gender,
            'uid'=>$request->uid,
            'created_by'=>Auth::id()
          ]);
          return response()->json(['success' => 'Abigail']);

        }
        function edit($id)
        {
            $table = Data::find($id);
            return view('admin.Data.edit')->with('table', $table);

       }
}
