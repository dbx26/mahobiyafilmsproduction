<?php

namespace App\Http\Middleware;

use App\Services\AESService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if(!$request->session()->has('user_email'))
        {
            $aes = app(AESService::class);
            // Redirect to login with a message
            return redirect()->route('auth.logout', ['error' => $aes->encrypt('Your session has expired. Please log in again.')]);
        }
        // Ensure logout token exists so logout link works and back-button to logout URL doesn't invalidate session
        if (!$request->session()->has('logout_token')) {
            $request->session()->put('logout_token', \Illuminate\Support\Str::random(40));
        }
        return $next($request);
    }
}
