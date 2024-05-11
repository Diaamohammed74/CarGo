<?php

namespace App\Http\Controllers\Api\V1\Dashboard\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategory\UpdateServiceCategoryRequest;
use App\Http\Requests\ServiceCategory\CreateServiceCategoryRequest;
use App\Http\Resources\Dashboard\ServiceCategory\ServiceCategoryResource;
use App\Models\ServiceCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceCategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $serviceCategories = ServiceCategory::useFilters()->dynamicPaginate();
        return ServiceCategoryResource::collection($serviceCategories);
    }

    public function store(CreateServiceCategoryRequest $request): JsonResponse
    {
        $serviceCategory = ServiceCategory::create($request->validated());
        return $this->apiResponseStored(new ServiceCategoryResource($serviceCategory));
    }

    public function show(ServiceCategory $serviceCategory): JsonResponse
    {
        return $this->apiResponseShow(new ServiceCategoryResource($serviceCategory));
    }

    public function update(UpdateServiceCategoryRequest $request, ServiceCategory $serviceCategory): JsonResponse
    {
        $serviceCategory->update($request->validated());
        return $this->apiResponseUpdated(new ServiceCategoryResource($serviceCategory));
    }

    public function destroy(ServiceCategory $serviceCategory): JsonResponse
    {
        $serviceCategory->delete();
        return $this->apiResponseDeleted();
    }

}
