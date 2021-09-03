<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
            if(\auth::user()->role=='1')
            {
                
                return 'admins/';
            }

            else if(\auth::user()->role=='3' && \auth::user()->email_verified_at != null)
            {
                return 'user/';
                
            }
            else
            {
                
                return redirect('email/verify');
            }
    }
}
