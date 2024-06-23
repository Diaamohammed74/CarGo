<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Tag\TagController;
use App\Http\Controllers\Dashboard\Order\OrderController;
use App\Http\Controllers\Dashboard\Video\VideoController;
use App\Http\Controllers\Dashboard\Product\ProductController;
use App\Http\Controllers\Dashboard\Service\ServiceController;
use App\Http\Controllers\Dashboard\Customer\CustomerController;
use App\Http\Controllers\Dashboard\ContactUs\ContactUsController;
use App\Http\Controllers\Dashboard\Mechanical\MechanicalController;
use App\Http\Controllers\Dashboard\VideoCategory\VideoCategoryController;
use App\Http\Controllers\Dashboard\Specialization\SpecializationController;
use App\Http\Controllers\Dashboard\ProductCategory\ProductCategoryController;
use App\Http\Controllers\Dashboard\ServiceCategory\ServiceCategoryController;

Route::prefix('dashboard')
  ->middleware(['auth.admin', "isAdmin"])
  ->name('dashboard.')
  ->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('product-categories', ProductCategoryController::class);
    Route::resource('video-categories', VideoCategoryController::class);
    Route::resource('specializations', SpecializationController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('tags', TagController::class);
    Route::resource('mechanicals', MechanicalController::class);
    Route::resource('contact-us', ContactUsController::class);
    Route::resource('orders', OrderController::class);
    Route::post('order/add-product/{order}',[OrderController::class,'addProduct'])->name('order.addProduct');
  });
