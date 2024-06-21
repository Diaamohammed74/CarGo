<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PayMobController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\Order\OrderController;

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
                Route::post('add-car', 'storeCar')->name('storeCar');
            });
        Route::prefix('order/')
            ->controller(OrderController::class)
            ->name('order.')->group(function () {
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
            });
    });

    Route::post('/pay/paymob',[PayMobController::class,'payWithPaymob'])->name('pay');

    Route::get('/payments/verify/{payment?}',[PayMobController::class,'verifyWithPaymob'])->name('payment-verify');

});
