<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Authentication\Front\AuthController;
use App\Http\Controllers\Api\V1\Authentication\Front\ResetPasswordContoller;
use App\Http\Controllers\Api\V1\Authentication\Front\EmailVerificationPromptController;
use App\Http\Controllers\Api\V1\Authentication\Front\EmailVerificationNotificationController;
// use App\Http\Controllers\Api\V1\Authentication\Front\NewPasswordController;

Route::prefix('/')->group(function () {
    Route::middleware('throttle:30,1')->group(function () {

        Route::controller(AuthController::class)->group(function () {
            Route::post('/register', 'register');
            Route::post('/login', 'login');
            Route::post('/logout', 'logout')->middleware(['auth:sanctum']);
            Route::post('/user-data', 'getUserCoursesData')->middleware(['auth:sanctum']);
        });
        Route::post('forgot-password',[ResetPasswordContoller::class,'store']);
        // Route::post('reset-password', [NewPasswordController::class,'setNewPassword'])->name('password.reset');
    });
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class,'store'])->middleware('auth:sanctum');
    Route::get('verify-email/{hash}',[EmailVerificationPromptController::class,'verification'])->name('verification.verify');
});


