<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('front.pages.about-us.about-us');
})
->name('about-us');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contactUsStore');

Route::prefix('/')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::prefix('user/')
            ->controller(ProfileController::class)
            ->name('user.')->group(function () {
                Route::get('profile', 'index')->name('profile');
            });
    });
});
