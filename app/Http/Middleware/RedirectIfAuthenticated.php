<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     //return redirect()->route('welcome');
        //     return redirect('/home');
        // }

        // return $next($request);

        if (Auth::guard($guard)->check()) {
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
          return $next($request);
    }
}
