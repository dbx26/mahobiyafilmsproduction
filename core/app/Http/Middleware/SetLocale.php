<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        // Allowed locales
        $allowedLocales = ['en', 'hi'];

        $locale = null;

        // 1) Try from query param (?locale=en)
        if ($request->has('locale') && in_array($request->query('locale'), $allowedLocales)) {
            $locale = $request->query('locale');
            Session::put('locale', $locale);
        }

        // 2) Try from first URL segment (/en/... or /hi/...)
        if (! $locale) {
            $segment = $request->segment(1);
            if (in_array($segment, $allowedLocales)) {
                $locale = $segment;
                Session::put('locale', $locale);
            }
        }

        // 3) Try from session (previously stored)
        if (! $locale && Session::has('locale')) {
            $locale = Session::get('locale');
        }

        // 4) Fallback (default to English if nothing found)
        if (! $locale) {
            $locale = config('app.fallback_locale', 'en');
            Session::put('locale', $locale);
        }

        // ✅ Apply locale
        App::setLocale($locale);

        return $next($request);
    }
}
