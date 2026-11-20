<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next): Response
    {
        if (($request->routeIs('auth.login') || $request->routeIs('login')) && ($request->session()->has('user_id') || $request->session()->has('user_email'))) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
