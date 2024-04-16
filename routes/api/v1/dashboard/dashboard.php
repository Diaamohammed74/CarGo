<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard')
    ->middleware(['auth:sanctum'])
    ->group(function () {

        Route::apiResource('/users', \App\Http\Controllers\Api\V1\Dashboard\User\UserController::class);


        Route::apiResource('/admins', \App\Http\Controllers\Api\V1\Dashboard\Admin\AdminController::class);


        Route::apiResource('/customers', \App\Http\Controllers\Api\V1\Dashboard\Customer\CustomerController::class);


        Route::apiResource('/customerCars', \App\Http\Controllers\Api\V1\Dashboard\CustomerCar\CustomerCarController::class);



        Route::apiResource('/mechanicals', \App\Http\Controllers\Api\V1\Dashboard\Mechanical\MechanicalController::class);


        Route::apiResource('/weekDays', \App\Http\Controllers\Api\V1\Dashboard\WeekDay\WeekDayController::class);


        Route::apiResource('/mechanicalAvailableTimes', \App\Http\Controllers\Api\V1\Dashboard\MechanicalAvailableTime\MechanicalAvailableTimeController::class);


        Route::apiResource('/governrates', \App\Http\Controllers\Api\V1\Dashboard\Governrate\GovernrateController::class);



        Route::apiResource('/cities', \App\Http\Controllers\Api\V1\Dashboard\City\CityController::class);



        Route::apiResource('/specializations', \App\Http\Controllers\Api\V1\Dashboard\Specialization\SpecializationController::class);

    });


