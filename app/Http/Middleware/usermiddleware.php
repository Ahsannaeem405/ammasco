<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class usermiddleware
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
       if(Auth::user()->role=='3' && Auth::user()->email_verified_at != null)
            {
                
                return $next($request);
            }
            else
            {
                
                return redirect('email/verify');
            }
    }
}
