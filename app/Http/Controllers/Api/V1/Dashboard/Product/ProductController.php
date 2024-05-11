<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Resources\Dashboard\Product\ProductResource;
use App\Http\Traits\Api\MediaHandler;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $products = Product::useFilters()->with(['category'])->dynamicPaginate();
        return ProductResource::collection($products);
    }

    public function store(CreateProductRequest $request): JsonResponse
    {
        $data          = $request->validated();
        $data['image'] = $this->upload($data['image'], 'uploads/images');
        $product       = Product::create($data);
        $product->load(['category']);
        $product->refresh();
        return $this->apiResponseStored(new ProductResource($product));
    }

    public function show(Product $product): JsonResponse
    {
        $product->load(['category']);
        return $this->apiResponseShow(new ProductResource($product));
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $this->updateMedia($data['image'], 'uploads/images', $product->image);
        }
        $product->update($data);
        $product->load(['category']);
        $product->refresh();
        return $this->apiResponseUpdated(new ProductResource($product));
    }

    public function destroy(Product $product): JsonResponse
    {
        if (isset($product->image)) {
            $this->deleteMedia($product->image);
        }
        $product->delete();
        return $this->apiResponseDeleted();
    }
}
