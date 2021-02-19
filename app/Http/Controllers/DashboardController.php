<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //$this->middleware('member', ['except' => ['logout']]);
        $this->middleware('member');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showuserDashboard()
    {
        if(Auth::user()->status === 1){
            return view('layouts.dashboard');
        } else {
            return redirect("/")->with(['message' => 'Sorry, your account is inactive.']);
        }
    }
}
