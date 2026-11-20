<?php

use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\BlockDangerousHtmlTagsMiddleware;
use App\Http\Middleware\NoCacheHeaders;
use App\Http\Middleware\PreventOpenRedirectMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\SetLocale;
use Illuminate\Auth\Access\AuthorizationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')->group(function () {
                if (file_exists(base_path('routes/adminRoute.php'))) {
                    require base_path('routes/adminRoute.php');
                }
            });
            Route::middleware('web')->group(function () {
                if (file_exists(base_path('routes/authRoute.php'))) {
                    require base_path('routes/authRoute.php');
                }
            });
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'AuthCheck' => AuthCheck::class,
            'BlockDangerousHtmlTagsMiddleware' => BlockDangerousHtmlTagsMiddleware::class,
            'PreventOpenRedirectMiddleware' => PreventOpenRedirectMiddleware::class,
            'NoCacheHeaders' => NoCacheHeaders::class,
            'SetLocale' => SetLocale::class,
            'redirectIfAuthenticated' => RedirectIfAuthenticated::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e, $request) {
            if ($e instanceof NotFoundHttpException) {
                return response()->view('errors.error-404-cover', [], 404);
            }
            if ($e instanceof AccessDeniedHttpException || $e instanceof AuthorizationException) {
                return response()->view('errors.error-403-cover', [], 403);
            }
            if ($e instanceof HttpException && $e->getStatusCode() === 403) {
                return response()->view('errors.error-403-cover', [], 403);
            }
        });
    })->create();

$publicHtml = realpath(dirname(__DIR__) . '/../public_html');
if ($publicHtml && file_exists($publicHtml)) {
    $app->usePublicPath($publicHtml);
}

return $app;
