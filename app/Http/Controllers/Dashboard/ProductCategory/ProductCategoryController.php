<?php

namespace App\Http\Controllers\Dashboard\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategory\UpdateProductCategoryRequest;
use App\Http\Requests\ProductCategory\CreateProductCategoryRequest;
use App\Http\Resources\Dashboard\ProductCategory\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductCategoryController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $productCategories = ProductCategory::useFilters()->dynamicPaginate();
        return ProductCategoryResource::collection($productCategories);
    }

    public function store(CreateProductCategoryRequest $request): JsonResponse
    {
        $productCategory = ProductCategory::create($request->validated());
        return $this->apiResponseStored(new ProductCategoryResource($productCategory));
    }

    public function show(ProductCategory $productCategory): JsonResponse
    {
        return $this->apiResponseShow(new ProductCategoryResource($productCategory));
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): JsonResponse
    {
        $productCategory->update($request->validated());
        return $this->apiResponseUpdated(new ProductCategoryResource($productCategory));
    }

    public function destroy(ProductCategory $productCategory): JsonResponse
    {
        $productCategory->delete();
        return $this->apiResponseDeleted();
    }

   
}
