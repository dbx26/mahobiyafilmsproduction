<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


// for Stored Open Redirect
class PreventOpenRedirectMiddleware
{
    protected $allowedExternalDomains = [
        // 'https://trusted.gov.in',
    ];

    protected $keysToCheck = ['redirect', 'redirect_url', 'url'];

    public function handle(Request $request, Closure $next)
    {
        foreach ($this->keysToCheck as $key) {
            if ($request->has($key)) {
                $url = $request->input($key);

                if ($this->isUnsafeRedirect($url)) {
                    $errorMessage = 'Redirection to external or malformed URL is not allowed.';

                    // Check if it's a normal browser request
                    if (! $request->wantsJson()) {
                        return redirect()->back()
                            ->withErrors([$key => $errorMessage])
                            ->withInput();
                    }

                    // Else, return JSON response (e.g. for API)
                    return response()->json([
                        'message' => 'Invalid or unsafe redirect URL detected.',
                        'errors' => [
                            $key => [$errorMessage]
                        ]
                    ], 422);
                }
            }
        }

        return $next($request);
    }

    protected function isUnsafeRedirect($url)
    {
        if (is_string($url) && str_starts_with($url, '/') && !str_starts_with($url, '//')) {
            return false;
        }

        foreach ($this->allowedExternalDomains as $domain) {
            if (str_starts_with($url, $domain)) {
                return false;
            }
        }

        return true;
    }
}
