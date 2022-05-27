<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Bank;


class BankController extends Controller
{
    function table()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor','status','subMenu','point','date')->where('mainMenu', 'bankingjobs')->get();
        return view('admin.preport.table')->with('table', $table);
    }

    function initate($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'bankingjobs')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.table')->with('table', $table);
    }
    function process($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'bankingjobs')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.table')->with('table', $table);
    }
    function approve($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'bankingjobs')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.table')->with('table', $table);
    }
    function reject($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'bankingjobs')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.table')->with('table', $table);
    }
    function tableloann()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loann')->get();
        return view('admin.preport.tableloann')->with('table', $table);
    }

    function initateloann($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loann')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableloann')->with('table', $table);
    }
    function processloann($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loann')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableloann')->with('table', $table);
    }
    function approveloann($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loann')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tableloann')->with('table', $table);
    }
    function rejectloann($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loann')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tableloann')->with('table', $table);
    }
    function viewloann($id)
    {
        $table = Bank::where('_id',$id)->get();

        return view('admin.preport.viewloann')->with('table', $table[0]);
    }
    function tablegovt()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'govt')->get();
        return view('admin.preport.tablegovt')->with('table', $table);
    }

    function initategovt($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'govt')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablegovt')->with('table', $table);
    }
    function processgovt($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'govt')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablegovt')->with('table', $table);
    }
    function approvegovt($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'govt')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tablegovt')->with('table', $table);
    }
    function rejectgovt($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'govt')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tablegovt')->with('table', $table);
    }
    function tableonboarding()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'board')->get();
        return view('admin.preport.tableonboarding')->with('table', $table);
    }

    function initateonboarding($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'board')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableonboarding')->with('table', $table);
    }
    function processonboarding($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'board')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableonboarding')->with('table', $table);
    }
    function approveonboarding($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'board')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tableonboarding')->with('table', $table);
    }
    function rejectonboarding($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'board')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tableonboarding')->with('table', $table);
    }
    function tableloan()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loan')->get();
        return view('admin.preport.tableloan')->with('table', $table);
    }

    function initateloan($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loan')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableloan')->with('table', $table);
    }
    function processloan($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loan')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tableloan')->with('table', $table);
    }
    function approveloan($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loan')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tableloan')->with('table', $table);
    }
    function rejectloan($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'loan')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tableloan')->with('table', $table);
    }
    function tablecrypto()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'crypto')->get();
        return view('admin.preport.tablecrypto')->with('table', $table);
    }

    function initatecrypto($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'crypto')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablecrypto')->with('table', $table);
    }
    function processcrypto($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'crypto')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablecrypto')->with('table', $table);
    }
    function approvecrypto($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'crypto')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tablecrypto')->with('table', $table);
    }
    function rejectcrypto($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'crypto')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tablecrypto')->with('table', $table);
    }
    function tablecc()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'cc')->get();
        return view('admin.preport.tablecc')->with('table', $table);
    }
    // function view($id)
    // {
    //     $table = Bank::where('_id', $id)->get();

    //     return view('admin.preport.view')->with('table', $table[0]);
    // }
    function initatecc($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'cc')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablecc')->with('table', $table);
    }
    function processcc($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'cc')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tablecc')->with('table', $table);
    }
    function approvecc($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'cc')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tablecc')->with('table', $table);
    }
    function rejectcc($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'cc')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tablecc')->with('table', $table);
    }
    function tabledemat()
    {
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'demat')->get();
        return view('admin.preport.tabledemat')->with('table', $table);
    }
    // function view($id)
    // {
    //     $table = Bank::where('_id', $id)->get();

    //     return view('admin.preport.view')->with('table', $table[0]);
    // }
    function initatedemat($id)
    {
        $login = Bank::find($id);
        $login->status = 2;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'demat')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tabledemat')->with('table', $table);
    }
    function processdemat($id)
    {
        $login = Bank::find($id);
        $login->status = 3;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'demat')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-warning');
        return view('admin.preport.tabledemat')->with('table', $table);
    }
    function approvedemat($id)
    {
        $login = Bank::find($id);
        $login->status = 4;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'demat')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-success');
        return view('admin.preport.tabledemat')->with('table', $table);
    }
    
    function rejectdemat($id)
    {
        $login = Bank::find($id);
        $login->status = 1;
        $login->save();
        $table = Bank::select('name', 'user', 'parent', 'phone', 'vendor', 'status', 'subMenu', 'point', 'date')->where('mainMenu', 'demat')->get();
        Session::flash('message', 'Successfully Activated!');
        Session::flash('alert-class', 'alert-danger');
        return view('admin.preport.tabledemat')->with('table', $table);
    }
}
