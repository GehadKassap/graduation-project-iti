<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;



class UserAuth
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

        if($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/');

        }
        // if (!Auth::guard('User')->check()) {
        //     return redirect('/signin');
        // }
        // if( $request->user() == null && $request->user()->role != 'admin'  )

            // return $next($request);
            // return $_COOKIE['role'];
        //  if( $_COOKIE('user_role') == 'user' || $_COOKIE('user_role') == null )
        //  {
        //     //return view("users.signin");
        //     return $_COOKIE('user_role');
        //  }
        //  else
        //  {
        //     return $next($request);
        //  }
        return $next($request);

    }
}
