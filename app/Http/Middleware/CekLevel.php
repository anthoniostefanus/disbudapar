<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (auth()->check() && $request->user()->level == 'Admin'){
            return $next($request);
        } 
        else if (in_array($request->user()->level,$levels)){
            return $next($request);
        } 
        else {
            return redirect()->guest('beranda');
        }
    }
}
