<?php

namespace App\Http\Middleware;

use Closure;

class isMonitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( Auth::user()->Type_User == 2)
                    return $next($request);
                return abort('404');
    }
}
