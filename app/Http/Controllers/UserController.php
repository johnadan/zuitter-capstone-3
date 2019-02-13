<?php
use App\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    // public function getUsers(){
    // 	$users = User::orderBy('created_at', 'id')->get();
    //echo $users->firstname . ' (' . $users->lastname . ')';
    // 	return view('layouts.dashboard', compact('$users' => ['users']));
    // }
    
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
}
