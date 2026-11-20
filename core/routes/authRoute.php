<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaptchaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Captcha Routes
|--------------------------------------------------------------------------
*/
Route::get('captcha-image', [CaptchaController::class, 'generateCaptcha'])
    ->name('captcha.image');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::prefix('auth')->name('auth.')->group(function () {
    Route::middleware(['redirectIfAuthenticated', 'NoCacheHeaders'])->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login-check', [AuthController::class, 'loginSubmit'])->name('loginSubmit');
    });

    // Registration
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerSubmit'])->name('registerSubmit');
    Route::get('register/verify-otp', [AuthController::class, 'showVerifyOtp'])->name('register.verifyOtp');
    Route::post('register/verify-otp', [AuthController::class, 'verifyOtp'])->name('register.verifyOtpSubmit');
    Route::post('register/resend-otp', [AuthController::class, 'resendOtp'])->name('register.resendOtp');

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->middleware('NoCacheHeaders')->name('logout');
});

Route::middleware(['AuthCheck', 'BlockDangerousHtmlTagsMiddleware', 'PreventOpenRedirectMiddleware', 'NoCacheHeaders'])->group(function () {
    Route::get('auth/change-password', [AuthController::class, 'passwordChange'])->name('auth.passwordChange');
    Route::post('auth/update-password', [AuthController::class, 'updatePassword'])->name('auth.passwordUpdate');
});

Route::get('auth/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgotPassword');
Route::post('auth/forgot-password', [AuthController::class, 'sendResetLink'])->name('auth.sendResetLink');
Route::get('auth/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');
Route::post('auth/reset-password', [AuthController::class, 'updateForgotPassword'])->name('auth.updateForgotPassword');
