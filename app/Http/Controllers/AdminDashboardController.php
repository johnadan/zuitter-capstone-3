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
    public function showadminDashboard()
    {
    	return view('layouts.admindashboard');
        // if(Auth::user()->isAdmin === 1){
        //     return view('layouts.admindashboard');
        // }
        // else{
            //return view('layouts.dashboard');
        //}
        
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
