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
        // $this->validate($request, [
        //     'postbody' => 'required'
        // ]);
        // $post = Post::find($id);
        // $post->postbody = $request->editedpost;
        // $post->update();
        // return response()->json(['message' => 'Post was successfully edited!'], 200);
        //  return redirect("/dashboard");
        $user = User::find($id);
        // $this->validate($request, [
        //     'editedfirstname' => 'required',
        //     'editedlastname' => 'required',
        //     'editedemail' => 'required'
        // ]);
        $user->firstname = $request->editedfirstname;
        $user->lastname = $request->editedlastname;
        $user->username = $request->editedusername;
        $user->email = $request->editedemail;
        //$user->update();
        $user->save();
        // return response()->json(['message' => 'User details were successfully updated!'], 200);
        return redirect("/admindashboard")->with(['message' => 'User details were successfully updated!']);
    }

    public function archiveUser($id) {
        $user = User::find($id);
        //dd($id);
        // $user->delete();
        $user->archiveUser($id);
        return redirect('/admindashboard')->with(['message' => 'User was successfully archived']);
    }

    public function restoreUser($id) 
    {
        $user = User::find($id);
        $user->restoreUser($id);
        return redirect('/admindashboard')->with(['message' => 'User was successfully restored']);
    }
    
    
}
