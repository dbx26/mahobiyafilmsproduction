<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::prefix('components')->group(function () {
        Route::get('/tables', function () {
            return view('admin.components.tables');
        })->name('admin.components.tables');

        Route::get('/forms', function () {
            return view('admin.components.forms');
        })->name('admin.components.forms');

        Route::get('/cards', function () {
            return view('admin.components.cards');
        })->name('admin.components.cards');
    });
});
