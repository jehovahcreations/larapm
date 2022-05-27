<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\User;
use App\Models\Mainmenu;


class UserController extends Controller
{

    function table()
    {
        $table = User::get();
        return view('frontend.user.table')->with('table', $table);
    }
    function create()
    {
        $table = Submenu::get();
        return view('frontend.user.create')->with('table', $table);
    }
    function deactive($id)
    {
        $login = User::find($id);
        $login->is_Active = 2;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.user.table')->with('table', $table);
    }
    function active($id)
    {
        $login = User::find($id);
        $login->is_Active = 1;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.user.table')->with('table', $table);
    }
    function demo($id)
    {
        $login = User::find($id);
        $login->demo = 2;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Sucessfully Deactivated !!!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.user.table')->with('table', $table);
    }
    function paid($id)
    {
        $login = User::find($id);
        $login->demo = 1;
        $login->save();
        $table = User::get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('frontend.user.table')->with('table', $table);
    }
    function delete($id)
    {
        User::destroy($id);
        $table = User::get();
        Session::flash('message', 'Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return view('frontend.user.table')->with('table', $table);
    }
  
    // function addabout(Request $request)
    // {
    //     $image = base64_encode(file_get_contents($request->file('image')));
    //     $plan = base64_encode(file_get_contents($request->file('image')));
    //     $file = $request->file('pdf');
    //     $destinationPath = 'uploads';
    //     $file->move($destinationPath,$file->getClientOriginalName());
    //     $mainmenu = Mainmenu::where('menuName', $request['mainMenu'])->get();
    //     $user = new User();
    //     $user->mainMenu = $request['mainMenu'];
    //     $user->mainMenuNo = $mainmenu[0]->menuNumber;
    //     $user->icon = $request['icon'];
    //     $user->subMenu = $request['subMenu'];
    //     $user->MinimumAgeatEntry = $request['MinimumAgeatEntry'];
    //     $user->MaximumAgeatEntry = $request['MaximumAgeatEntry'];
    //     $user->MaximumMaturityAge = $request['MaximumMaturityAge'];
    //     $user->PolicyTerm = $request['PolicyTerm'];
    //     $user->MinimumSumAssured = $request['MinimumSumAssured'];
    //     $user->MaximumSumAssured = $request['MaximumSumAssured'];
    //     $user->PremiumMode = $request['PremiumMode'];
    //     $user->RidersAvailable = $request['RidersAvailable'];
    //     $user->SurrenderValue = $request['SurrenderValue'];
    //     $user->LoanAvailable = $request['LoanAvailable'];
    //     $user->OtherBenefit = $request['OtherBenefit'];
    //     $user->name = $request['name'];
    //     $user->image = $image;
    //     $user->plan = $plan;
    //     $user->pdf = 'uploads/'.$file->getClientOriginalName();
    //     $user->is_Active = 1;
    //     $user->save();
    //     $table = User::get();
    //     Session::flash('message', 'Saved Successfully!');
    //     Session::flash('alert-class', 'alert-success');
    //     return view('frontend.user.table')->with('table', $table);
    // }
    // function edit($id)
    // {
    //     $table = User::find($id);
    //     return view('frontend.user.edit')->with('table', $table);
    // }
    // function update(Request $request)
    // {
    //     if ($request->hasFile('image')) {
    //         $image = base64_encode(file_get_contents($request->file('image')));
    //         $update = User::find($request['id']);
    //         $update->name = $request['name'];
    //         $update->url = $request['url'];
    //         $update->image = $image;
    //         $update->save();
    //     } else {
    //         $update = User::find($request['id']);
    //         $update->name = $request['name'];
    //         $update->url = $request['url'];
    //         $update->image = $request['img'];
    //         $update->save();
    //     }
    //     $table = User::get();
    //     Session::flash('message', 'Saved Successfully!');
    //     Session::flash('alert-class', 'alert-success');
    //     return view('frontend.user.table')->with('table', $table);
    // }
}
