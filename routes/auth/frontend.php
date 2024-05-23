<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Authentication\Front\SocialiteController;
use App\Http\Controllers\Front\Authentication\Front\RegisteredUserController;
use App\Http\Controllers\Front\Authentication\Front\AuthenticatedSessionController;

Route::name('auth.')->middleware('guest:web')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('registerStore');
    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store')->name('loginStore');
        Route::delete('logout', 'destroy')->name('logout');
    });
    Route::controller(SocialiteController::class)->group(function () {
        Route::get('/login/{provider}', 'redirectToProvider')->name('socialite.login');
        Route::get('/login/{provider}/callback', 'handleProviderCallback');
    });
});
