<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use Illuminate\Http\Request;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        if ($request->user() && $request->user()->isAdmin != 0)
        {
        //    return new Response(view('unauthorized'));
            abort(403, 'Unauthorized Access!');
        }
        return $next($request);
    }
}
