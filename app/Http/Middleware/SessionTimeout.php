<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && session('lastActivity') && (time() - session('lastActivity') > 900)) {
            auth()->logout();
            return redirect('/login')->with('message', 'Session expired, please login again.');
        }

        session(['lastActivity' => time()]);
        return $next($request);
    }
}
