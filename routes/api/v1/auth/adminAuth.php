<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Authentication\Admin\AdminAuthController;
Route::prefix('/dashboard')->group(function () {
    Route::controller(AdminAuthController::class)->group(function () {
        Route::post('/login', 'login');
        Route::post('/logout', 'logout')->middleware(['auth:sanctum']);
    });
});

