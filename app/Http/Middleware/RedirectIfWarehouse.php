<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfWarehouse
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'warehouse')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('warehouse.dashboard');
        }

        return $next($request);
    }

}
