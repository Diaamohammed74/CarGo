<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Authentication\AuthenticatedSessionController as AdminAuthenticatedSessionController;

Route::prefix('dashboard')->group(function () {
    Route::controller(AdminAuthenticatedSessionController::class)->group(function () {
        Route::get('/login', 'create')->name('dashboard.login');
        Route::post('/login', 'store')->name('dashboard.loginStore');
        Route::post('/logout', 'destroy')->name('dashboard.logout');
    });
});
