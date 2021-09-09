<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class adminmiddleware
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
        if(Auth::user()->role=='1')
            {
                
                return $next($request);
            }
            else
            {
                
                return redirect('/')->with('status' ,'you are not login to admin pannel');
            }
    }
}
