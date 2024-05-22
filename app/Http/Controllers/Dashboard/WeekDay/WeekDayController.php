<?php

namespace App\Http\Controllers\Dashboard\WeekDay;

use App\Http\Controllers\Controller;
use App\Http\Resources\Dashboard\WeekDay\WeekDayResource;
use App\Models\WeekDay;

class WeekDayController extends Controller
{
    public function __invoke()
    {
        return $this->apiResponseShow(WeekDayResource::collection(WeekDay::get()));
    }
}
