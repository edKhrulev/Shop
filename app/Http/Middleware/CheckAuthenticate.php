<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthenticate
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
        if(!session('userId')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
