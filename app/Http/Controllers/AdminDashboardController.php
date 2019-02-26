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
        $users = User::orderBy('created_at', 'id')->get();
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
        $this->validate($request, [
            'editedfirstname' => 'required',
            'editedlastname' => 'required',
            'editedemail' => 'required'
        ]);
        $user->firstname = $request->editedfirstname;
        $user->lastname = $request->editedlastname;
        $user->email = $request->editedemail;
        $user->update();
        return response()->json(['message' => 'User details was successfully updated!'], 200);
        return redirect("/admindashboard");
    }

    public function archiveUser($id) {
    //     $post = Post::find($id);
    //     $post->delete();
    // return redirect('/dashboard')->with(['message' => 'Post was successfully deleted']);
        $user = User::find($id);
        //dd($id);
        $user->delete();
        return redirect('/admindashboard')->with(['message' => 'User was successfully archive']);
    }

    // public function addUser(){
    //     $user = new User();
    // }

    // public function addItem(Request $request) {
    // $rules = array (
    //         'name' => 'required'
    // );
    // $validator = Validator::make ( Input::all (), $rules );
    // if ($validator->fails ())
    //     return Response::json ( array (
                    
    //             'errors' => $validator->getMessageBag ()->toArray ()
    //     ) );
    //     else {
    //         $data = new Data ();
    //         $data->name = $request->name;
    //         $data->save ();
    //         return response ()->json ( $data );
    //     }
    // }
    
}
