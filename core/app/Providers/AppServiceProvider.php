<?php

namespace App\Providers;

use App\Services\AESService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AESService::class, function () {
            return new AESService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $profileImageUrl = asset('admin-theme/assets/images/avatar/user.avif');
            $dashboardHomeUrl = route('admin.dashboard');

            $view->with([
                'headerProfileImage' => $profileImageUrl,
                'dashboardHomeUrl'   => $dashboardHomeUrl
            ]);
        });
    }
}
