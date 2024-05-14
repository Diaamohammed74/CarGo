<?php

namespace App\Http\Controllers\Api\V1\Dashboard\City;

use App\Http\Controllers\Controller;
use App\Http\Resources\Dashboard\City\CityResource;
use App\Models\City;
class CityController extends Controller
{
    public function __invoke()
    {
        $cities = City::useFilters()->get();
        return $this->apiResponseShow(CityResource::collection($cities));
    }
}
