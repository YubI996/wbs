<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GetRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        // dd($request->user());
        if(($request->user()->role == $role)){
            dd($role);
        return $next($request);
        };
        return redirect('/');
    }
}
