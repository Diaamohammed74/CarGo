<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Authentication\Front\RegisteredUserController;
use App\Http\Controllers\Api\V1\Authentication\Front\AuthenticatedSessionController;

Route::prefix('/')->group(function () {
    Route::name('auth.')->group(function () {
          Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

          Route::post('register', [RegisteredUserController::class, 'store'])->name('registerStore');

        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('loginStore');

          // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

          // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

          // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
          //     ->name('password.reset');

          // Route::post('reset-password', [NewPasswordController::class, 'store'])
          //     ->name('password.store');
    });
});
