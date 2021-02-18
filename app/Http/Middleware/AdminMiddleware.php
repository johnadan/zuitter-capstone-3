<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Response;
//use Illuminate\Http\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // // if(Auth::user() && Auth::user()->isAdmin == 1){
        // if(Auth::user()->isAdmin == 1){
        //     //return redirect('/admindashboard');
        //     return $next($request);
        // } else {
        //     abort(403, 'Unauthorized Access!');
        // }

        // //return $next($request);
        // return redirect('/admindashboard');

        if ($request->user() && $request->user()->isAdmin != 1)
        {
            // return new Response(view('unauthorized'));
            abort(403, 'Unauthorized Access!');
        }
        return $next($request);
    }
}
