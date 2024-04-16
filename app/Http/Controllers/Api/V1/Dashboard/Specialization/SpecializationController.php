<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Specialization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specialization\UpdateSpecializationRequest;
use App\Http\Requests\Specialization\CreateSpecializationRequest;
use App\Http\Resources\Dashboard\Specialization\SpecializationResource;
use App\Models\Specialization;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SpecializationController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(): AnonymousResourceCollection
    {
        $specializations = Specialization::useFilters()->dynamicPaginate();
        return SpecializationResource::collection($specializations);
    }

    public function store(CreateSpecializationRequest $request): JsonResponse
    {
        $specialization = Specialization::create($request->validated());
        return $this->apiResponseStored(new SpecializationResource($specialization));
    }

    public function show(Specialization $specialization): JsonResponse
    {
        return $this->apiResponseShow(new SpecializationResource($specialization));
    }

    public function update(UpdateSpecializationRequest $request, Specialization $specialization): JsonResponse
    {
        $specialization->update($request->validated());
        return $this->apiResponseUpdated(new SpecializationResource($specialization));
    }

    public function destroy(Specialization $specialization): JsonResponse
    {
        $specialization->delete();
        return $this->apiResponseDeleted();
    }

}
