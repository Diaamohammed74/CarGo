<?php

namespace App\Http\Controllers\Api\V1\Dashboard\WeekDay;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeekDay\UpdateWeekDayRequest;
use App\Http\Requests\WeekDay\CreateWeekDayRequest;
use App\Http\Resources\Dashboard\WeekDay\WeekDayResource;
use App\Models\WeekDay;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WeekDayController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $weekDays = WeekDay::useFilters()->dynamicPaginate();

        return WeekDayResource::collection($weekDays);
    }

    public function store(CreateWeekDayRequest $request): JsonResponse
    {
        $weekDay = WeekDay::create($request->validated());

        return $this->apiResponseStored('WeekDay created successfully', new WeekDayResource($weekDay));
    }

    public function show(WeekDay $weekDay): JsonResponse
    {
        return $this->responseSuccess(null, new WeekDayResource($weekDay));
    }

    public function update(UpdateWeekDayRequest $request, WeekDay $weekDay): JsonResponse
    {
        $weekDay->update($request->validated());

        return $this->responseSuccess('WeekDay updated Successfully', new WeekDayResource($weekDay));
    }

    public function destroy(WeekDay $weekDay): JsonResponse
    {
        $weekDay->delete();

        return $this->apiResponseDeleted();
    }

   
}
