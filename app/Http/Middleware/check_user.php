<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;


class check_user
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
                
                return 'admins/';
            }

            else if(Auth::user()->role=='3' && Auth::user()->email_verified_at != null)
            {
                return 'user/';
                
            }
            else
            {
                
                return redirect('email/verify');
            }
    }
}
