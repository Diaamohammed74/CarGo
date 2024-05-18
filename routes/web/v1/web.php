<?php

use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProfileController;
use Illuminate\Support\Facades\Route;

    /*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', function () {
    return view('front.pages.about-us.about-us');
})->name('about-us');
Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact-us');

Route::post('/contact-us',[ContactUsController::class,'store'])->name('contactUsStore');

Route::prefix('user/')->name('user.')->group(function () {
  Route::get('/user/profile', [ProfileController::class, 'index'])->name('profile');
});

require __DIR__ . '/main/main.php';
