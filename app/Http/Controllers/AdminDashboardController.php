<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;

class AdminDashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showadminDashboard() { 
        $users = User::orderBy('created_at', 'ASC')->get();
        return view('layouts.admindashboard', compact('users'));
    	//return view('layouts.admindashboard');
        // if(Auth::user()->isAdmin === 1){
        //     return view('layouts.admindashboard');
        // }
        // else{
            //return view('layouts.dashboard');
        //}
    }

    public function updateUser(Request $request, $id) {
        $user = User::find($id);
        $user->firstname = $request->editedfirstname;
        $user->lastname = $request->editedlastname;
        $user->username = $request->editedusername;
        $user->email = $request->editedemail;
        $user->save();
        return redirect("/admindashboard")->with(['message' => 'User details were successfully updated!']);
        // $this->validate($request, [
        //     'editedfirstname' => 'required',
        //     'editedlastname' => 'required',
        //     'editedemail' => 'required'
        // ]);
        //$user->update();
        // return response()->json(['message' => 'User details were successfully updated!'], 200);
    }

    public function archiveUser($id) {
        $user = User::find($id);
        $user->archiveUser($id);
        return redirect('/admindashboard')->with(['message' => 'User was successfully archived']);
        //dd($id);
        // $user->delete();
    }

    public function restoreUser($id) 
    {
        $user = User::find($id);
        $user->restoreUser($id);
        return redirect('/admindashboard')->with(['message' => 'User was successfully restored']);
    }
    
    
}
