<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckCargoAdminDiretoria
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
        if (Auth::user()->cargo_id == 1 || Auth::user()->cargo_id == 2) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
