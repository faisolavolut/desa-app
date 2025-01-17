<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckInvestorRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika role investor dan mencoba akses selain /app/login atau /app/register
        // dd(Auth::user()->roles);
        dd(Auth::user()->roles);
        if (Auth::check() && Auth::user()->roles !== 'ADMIN') {

            return redirect('/');
        }
        return $next($request);
    }
}
