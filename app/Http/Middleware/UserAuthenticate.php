<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
	    if(!$request->expectsJson()){
		    if($request->routeIs('users.*')){
			   /* session()->flash('fail','Debes iniciar sesión primero');*/
			    return route('users.login');
		    }
	    }
        return $next($request);
    }
}
