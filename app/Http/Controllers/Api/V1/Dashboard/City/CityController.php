<?php

namespace App\Http\Controllers\Api\V1\Dashboard\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\UpdateCityRequest;
use App\Http\Requests\City\CreateCityRequest;
use App\Http\Resources\Dashboard\City\CityResource;
use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CityController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $cities = City::useFilters()->dynamicPaginate();

        return CityResource::collection($cities);
    }

    public function store(CreateCityRequest $request): JsonResponse
    {
        $city = City::create($request->validated());

        return $this->apiResponseStored('City created successfully', new CityResource($city));
    }

    public function show(City $city): JsonResponse
    {
        return $this->responseSuccess(null, new CityResource($city));
    }

    public function update(UpdateCityRequest $request, City $city): JsonResponse
    {
        $city->update($request->validated());

        return $this->responseSuccess('City updated Successfully', new CityResource($city));
    }

    public function destroy(City $city): JsonResponse
    {
        $city->delete();

        return $this->apiResponseDeleted();
    }

   
}
