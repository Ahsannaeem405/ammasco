<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;


class role
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
        if(request()->is('admins'))
        {
            if(Auth::user()->dashboard=='on')
            {
                
                return $next($request);
            }
            else
            {
                 return redirect('email/not_allow');
                
            }
        }
        else if(request()->is('admins/add_product'))
        {
            if(Auth::user()->add_product=='on')
            {
                
                return $next($request);
            }
            else
            {
                 return redirect('email/not_allow');
                
            }
        }
        else if(request()->is('admins/order'))
        {
            if(Auth::user()->view_order=='on')
            {
                
                return $next($request);
            }
            else
            {
                 return redirect('email/not_allow');
                
            }
        }

        else if(request()->is('admins/approve_user'))
        {
            if(Auth::user()->approve_user=='on')
            {
                
                return $next($request);
            }
            else
            {
                 return redirect('email/not_allow');
                
            }
        }
        else if(request()->is('admins/user'))
        {
            if(Auth::user()->pending_user=='on')
            {
                
                return $next($request);
            }
            else
            {
                 return redirect('email/not_allow');
                
            }
        }
        else if(request()->is('admins/add_manager'))
        {
            if(Auth::user()->manager=='on')
            {
                
                return $next($request);
            }
            else
            {
                return redirect('email/not_allow');
                
            }
        }
        else{
            return $next($request);
        }
        
    }
}
