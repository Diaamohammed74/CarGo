<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Resources\Dashboard\Product\ProductResource;
use App\Http\Traits\Api\MediaHandler;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
    }

    public function index()
    {
        $products = Product::useFilters()->latest()->with(['category'])->get();
        return view('dashboard.products.index',compact('products'));
    }
    public function create(){
        $categories=ProductCategory::latest()->get();
        return view('dashboard.products.add',compact('categories'));
    }
    public function store(CreateProductRequest $request)
    {
        $data          = $request->validated();
        $data['image'] = $this->upload($data['image'], 'uploads/images');
        Product::create($data);
        $this->StoredToaster();
        return back();
    }

    public function show(Product $product)
    {
        $product->load(['category']);
        return $this->apiResponseShow(new ProductResource($product));
    }
    public function edit(Product $product)
    {
        $categories = ProductCategory::latest()->get();
        return view('dashboard.products.edit', compact('categories', 'product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = $this->updateMedia($data['image'], 'uploads/images', $product->image);
        }
        $product->update($data);
        $this->UpdatedToaster();
        return to_route('dashboard.products.index');
    }

    public function destroy(Product $product)
    {
        if (isset($product->image)) {
            $this->deleteMedia($product->image);
        }
        $product->delete();
        $this->DeletedToaster();
        return back();
    }
}
