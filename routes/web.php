<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Dashboard\Tag\TagController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Admin\AdminController;
use App\Http\Controllers\Dashboard\Video\VideoController;
use App\Http\Controllers\Dashboard\Product\ProductController;
use App\Http\Controllers\Dashboard\Service\ServiceController;
use App\Http\Controllers\Dashboard\WeekDay\WeekDayController;
use App\Http\Controllers\Dashboard\Customer\CustomerController;
use App\Http\Controllers\Dashboard\Governrate\GovernrateController;
use App\Http\Controllers\Dashboard\Mechanical\MechanicalController;
use App\Http\Controllers\Dashboard\CustomerCar\CustomerCarController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\Authentication\Front\SocialiteController;
use App\Http\Controllers\Dashboard\VideoCategory\VideoCategoryController;
use App\Http\Controllers\Dashboard\Specialization\SpecializationController;
use App\Http\Controllers\Dashboard\ProductCategory\ProductCategoryController;
use App\Http\Controllers\Dashboard\ServiceCategory\ServiceCategoryController;
use App\Http\Controllers\Front\Authentication\Front\RegisteredUserController;
use App\Http\Controllers\Dashboard\MechanicalAvailableTime\MechanicalAvailableTimeController;
use App\Http\Controllers\Dashboard\Authentication\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Front\Authentication\Front\AuthenticatedSessionController;

Route::prefix('/')->group(function () {
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


    Route::controller(AdminAuthenticatedSessionController::class)->group(function () {
        Route::delete('logout', 'destroy')->name('auth.logout');
    });
});







Route::prefix('/dashboard')->group(function () {
    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::post('/login', 'login');
        Route::post('/logout', 'logout')->middleware(['auth:sanctum']);
    });
});






Route::get('/', [FrontHomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('front.pages.about-us.about-us');
})->name('about-us');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contactUsStore');



















Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
          // Specializations
        Route::controller(SpecializationController::class)->group(function () {
            Route::get('/specializations', 'index')->name('specializations.index');
            Route::get('/specializations/create', 'create')->name('specializations.create');
            Route::post('/specializations', 'store')->name('specializations.store');
            Route::get('/specializations/{specialization}', 'show')->name('specializations.show');
            Route::get('/specializations/{specialization}/edit', 'edit')->name('specializations.edit');
            Route::put('/specializations/{specialization}', 'update')->name('specializations.update');
            Route::delete('/specializations/{specialization}', 'destroy')->name('specializations.destroy');
        });

          // Service Categories
        Route::controller(ServiceCategoryController::class)->group(function () {
            Route::get('/service-categories', 'index')->name('service-categories.index');
            Route::get('/service-categories/create', 'create')->name('service-categories.create');
            Route::post('/service-categories', 'store')->name('service-categories.store');
            Route::get('/service-categories/{service_category}', 'show')->name('service-categories.show');
            Route::get('/service-categories/{service_category}/edit', 'edit')->name('service-categories.edit');
            Route::put('/service-categories/{service_category}', 'update')->name('service-categories.update');
            Route::delete('/service-categories/{service_category}', 'destroy')->name('service-categories.destroy');
        });

          // Services
        Route::controller(ServiceController::class)->group(function () {
            Route::get('/services', 'index')->name('services.index');
            Route::get('/services/create', 'create')->name('services.create');
            Route::post('/services', 'store')->name('services.store');
            Route::get('/services/{service}', 'show')->name('services.show');
            Route::get('/services/{service}/edit', 'edit')->name('services.edit');
            Route::put('/services/{service}', 'update')->name('services.update');
            Route::delete('/services/{service}', 'destroy')->name('services.destroy');
        });

          // Product Categories
        Route::controller(ProductCategoryController::class)->group(function () {
            Route::get('/product-categories', 'index')->name('product-categories.index');
            Route::get('/product-categories/create', 'create')->name('product-categories.create');
            Route::post('/product-categories', 'store')->name('product-categories.store');
            Route::get('/product-categories/{product_category}', 'show')->name('product-categories.show');
            Route::get('/product-categories/{product_category}/edit', 'edit')->name('product-categories.edit');
            Route::put('/product-categories/{product_category}', 'update')->name('product-categories.update');
            Route::delete('/product-categories/{product_category}', 'destroy')->name('product-categories.destroy');
        });

          // Products
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products', 'index')->name('products.index');
            Route::get('/products/create', 'create')->name('products.create');
            Route::post('/products', 'store')->name('products.store');
            Route::get('/products/{product}', 'show')->name('products.show');
            Route::get('/products/{product}/edit', 'edit')->name('products.edit');
            Route::put('/products/{product}', 'update')->name('products.update');
            Route::delete('/products/{product}', 'destroy')->name('products.destroy');
        });

          // Users
        Route::controller(UserController::class)->group(function () {
            Route::get('/users', 'index')->name('users.index');
            Route::get('/users/create', 'create')->name('users.create');
            Route::post('/users', 'store')->name('users.store');
            Route::get('/users/{user}', 'show')->name('users.show');
            Route::get('/users/{user}/edit', 'edit')->name('users.edit');
            Route::put('/users/{user}', 'update')->name('users.update');
            Route::delete('/users/{user}', 'destroy')->name('users.destroy');
        });

          // Admins
        Route::controller(AdminController::class)->group(function () {
            Route::get('/admins', 'index')->name('admins.index');
            Route::get('/admins/create', 'create')->name('admins.create');
            Route::post('/admins', 'store')->name('admins.store');
            Route::get('/admins/{admin}', 'show')->name('admins.show');
            Route::get('/admins/{admin}/edit', 'edit')->name('admins.edit');
            Route::put('/admins/{admin}', 'update')->name('admins.update');
            Route::delete('/admins/{admin}', 'destroy')->name('admins.destroy');
        });

          // Customers
        Route::controller(CustomerController::class)->group(function () {
            Route::get('/customers', 'index')->name('customers.index');
            Route::get('/customers/create', 'create')->name('customers.create');
            Route::post('/customers', 'store')->name('customers.store');
            Route::get('/customers/{customer}', 'show')->name('customers.show');
            Route::get('/customers/{customer}/edit', 'edit')->name('customers.edit');
            Route::put('/customers/{customer}', 'update')->name('customers.update');
            Route::delete('/customers/{customer}', 'destroy')->name('customers.destroy');
        });

          // Customer Cars
        Route::controller(CustomerCarController::class)->group(function () {
            Route::get('/customerCars', 'index')->name('customerCars.index');
            Route::get('/customerCars/create', 'create')->name('customerCars.create');
            Route::post('/customerCars', 'store')->name('customerCars.store');
            Route::get('/customerCars/{customerCar}', 'show')->name('customerCars.show');
            Route::get('/customerCars/{customerCar}/edit', 'edit')->name('customerCars.edit');
            Route::put('/customerCars/{customerCar}', 'update')->name('customerCars.update');
            Route::delete('/customerCars/{customerCar}', 'destroy')->name('customerCars.destroy');
        });

          // Mechanicals
        Route::controller(MechanicalController::class)->group(function () {
            Route::get('/mechanicals', 'index')->name('mechanicals.index');
            Route::get('/mechanicals/create', 'create')->name('mechanicals.create');
            Route::post('/mechanicals', 'store')->name('mechanicals.store');
            Route::get('/mechanicals/{mechanical}', 'show')->name('mechanicals.show');
            Route::get('/mechanicals/{mechanical}/edit', 'edit')->name('mechanicals.edit');
            Route::put('/mechanicals/{mechanical}', 'update')->name('mechanicals.update');
            Route::delete('/mechanicals/{mechanical}', 'destroy')->name('mechanicals.destroy');
        });

          // Mechanical Available Times
        Route::controller(MechanicalAvailableTimeController::class)->group(function () {
            Route::get('/mechanicalAvailableTimes', 'index')->name('mechanicalAvailableTimes.index');
            Route::get('/mechanicalAvailableTimes/create', 'create')->name('mechanicalAvailableTimes.create');
            Route::post('/mechanicalAvailableTimes', 'store')->name('mechanicalAvailableTimes.store');
            Route::get('/mechanicalAvailableTimes/{mechanicalAvailableTime}', 'show')->name('mechanicalAvailableTimes.show');
            Route::get('/mechanicalAvailableTimes/{mechanicalAvailableTime}/edit', 'edit')->name('mechanicalAvailableTimes.edit');
            Route::put('/mechanicalAvailableTimes/{mechanicalAvailableTime}', 'update')->name('mechanicalAvailableTimes.update');
            Route::delete('/mechanicalAvailableTimes/{mechanicalAvailableTime}', 'destroy')->name('mechanicalAvailableTimes.destroy');
        });

          // Governrates
        Route::controller(GovernrateController::class)->group(function () {
            Route::get('/governrates', 'index')->name('governrates.index');
            Route::get('/governrates/create', 'create')->name('governrates.create');
            Route::post('/governrates', 'store')->name('governrates.store');
            Route::get('/governrates/{governrate}', 'show')->name('governrates.show');
            Route::get('/governrates/{governrate}/edit', 'edit')->name('governrates.edit');
            Route::put('/governrates/{governrate}', 'update')->name('governrates.update');
            Route::delete('/governrates/{governrate}', 'destroy')->name('governrates.destroy');
        });

          // Video Categories
        Route::controller(VideoCategoryController::class)->group(function () {
            Route::get('/video-categories', 'index')->name('video-categories.index');
            Route::get('/video-categories/create', 'create')->name('video-categories.create');
            Route::post('/video-categories', 'store')->name('video-categories.store');
            Route::get('/video-categories/{videoCategory}', 'show')->name('video-categories.show');
            Route::get('/video-categories/{videoCategory}/edit', 'edit')->name('video-categories.edit');
            Route::put('/video-categories/{videoCategory}', 'update')->name('video-categories.update');
            Route::delete('/video-categories/{videoCategory}', 'destroy')->name('video-categories.destroy');
        });

          // Videos
        Route::controller(VideoController::class)->group(function () {
            Route::get('/videos', 'index')->name('videos.index');
            Route::get('/videos/create', 'create')->name('videos.create');
            Route::post('/videos', 'store')->name('videos.store');
            Route::get('/videos/{video}', 'show')->name('videos.show');
            Route::get('/videos/{video}/edit', 'edit')->name('videos.edit');
            Route::put('/videos/{video}', 'update')->name('videos.update');
            Route::delete('/videos/{video}', 'destroy')->name('videos.destroy');
        });

          // Tags
        Route::controller(TagController::class)->group(function () {
            Route::get('/tags', 'index')->name('tags.index');
            Route::get('/tags/create', 'create')->name('tags.create');
            Route::post('/tags', 'store')->name('tags.store');
            Route::get('/tags/{tag}', 'show')->name('tags.show');
            Route::get('/tags/{tag}/edit', 'edit')->name('tags.edit');
            Route::put('/tags/{tag}', 'update')->name('tags.update');
            Route::delete('/tags/{tag}', 'destroy')->name('tags.destroy');
        });

        Route::get('/week-days', [WeekDayController::class, 'index'])->name('week-days.index');
    });
