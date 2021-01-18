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
        // if( $request->user() == null && $request->user()->role != 'admin'  )

        //     // return $next($request);

        //  if( $_COOKIE('user_role') == 'user' ||$_COOKIE('user_role') == null )
        //  {
        //     return view("users.signin");
        //  }
        //  else
        //  {
        //     return $next($request);
        //  }
        return $next($request);

    }
}
