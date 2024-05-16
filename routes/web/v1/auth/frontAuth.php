<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Authentication\Front\SocialiteController;
use App\Http\Controllers\Front\Authentication\Front\RegisteredUserController;
use App\Http\Controllers\Front\Authentication\Front\AuthenticatedSessionController;

Route::prefix('/')->group(function () {
  Route::name('auth.')->middleware('guest:web')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('registerStore');



    Route::controller(AuthenticatedSessionController::class)->group(function () {
      Route::get('login', 'create')->name('login');
      Route::post('login', 'store')->name('loginStore');
    });
    Route::controller(SocialiteController::class)->group(function () {
      Route::get('/login/{provider}', 'redirectToProvider')->name('socialite.login');
      Route::get('/login/{provider}/callback', 'handleProviderCallback');
    });

      // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

      // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

      // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
      //     ->name('password.reset');

      // Route::post('reset-password', [NewPasswordController::class, 'store'])
      //     ->name('password.store');
  });
});
