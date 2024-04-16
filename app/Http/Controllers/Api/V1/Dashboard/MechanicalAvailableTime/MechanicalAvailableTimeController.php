<?php

namespace App\Http\Controllers\Api\V1\Dashboard\MechanicalAvailableTime;

use App\Http\Controllers\Controller;
use App\Http\Requests\MechanicalAvailableTime\UpdateMechanicalAvailableTimeRequest;
use App\Http\Requests\MechanicalAvailableTime\CreateMechanicalAvailableTimeRequest;
use App\Http\Resources\Dashboard\MechanicalAvailableTime\MechanicalAvailableTimeResource;
use App\Models\MechanicalAvailableTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MechanicalAvailableTimeController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $mechanicalAvailableTimes = MechanicalAvailableTime::useFilters()->dynamicPaginate();

        return MechanicalAvailableTimeResource::collection($mechanicalAvailableTimes);
    }

    public function store(CreateMechanicalAvailableTimeRequest $request): JsonResponse
    {
        $mechanicalAvailableTime = MechanicalAvailableTime::create($request->validated());

        return $this->apiResponseStored('MechanicalAvailableTime created successfully', new MechanicalAvailableTimeResource($mechanicalAvailableTime));
    }

    public function show(MechanicalAvailableTime $mechanicalAvailableTime): JsonResponse
    {
        return $this->responseSuccess(null, new MechanicalAvailableTimeResource($mechanicalAvailableTime));
    }

    public function update(UpdateMechanicalAvailableTimeRequest $request, MechanicalAvailableTime $mechanicalAvailableTime): JsonResponse
    {
        $mechanicalAvailableTime->update($request->validated());

        return $this->responseSuccess('MechanicalAvailableTime updated Successfully', new MechanicalAvailableTimeResource($mechanicalAvailableTime));
    }

    public function destroy(MechanicalAvailableTime $mechanicalAvailableTime): JsonResponse
    {
        $mechanicalAvailableTime->delete();

        return $this->apiResponseDeleted();
    }

   
}
