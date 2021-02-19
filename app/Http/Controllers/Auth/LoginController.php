<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //  protected $redirectTo = '/dashboard';
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $role = Auth::user()->isAdmin; 
        switch ($role) {
          case '1':
            return '/admindashboard';
            break;
          case '0':
            return '/dashboard';
            break; 
      
          default:
            return '/home'; 
          break;
        }
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function email()
    {
        return 'email'; //or return the field which you want to use.
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials(\Illuminate\Http\Request $request)
    {
      $credentials = $request->only($this->email(), 'password');
      return array_add($credentials, 'status', '1');
    }
}
