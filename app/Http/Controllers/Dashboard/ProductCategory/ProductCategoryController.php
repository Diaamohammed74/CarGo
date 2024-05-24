<?php

namespace App\Http\Controllers\Dashboard\ProductCategory;

use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategory\CreateProductCategoryRequest;
use App\Http\Requests\ProductCategory\UpdateProductCategoryRequest;
use App\Http\Requests\ServiceCategory\CreateServiceCategoryRequest;
use App\Http\Requests\ServiceCategory\UpdateServiceCategoryRequest;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $productCategories = ProductCategory::useFilters()->latest()->get();
        return view('dashboard.product-category.index', compact('productCategories'));
    }

    public function create()
    {
        return view('dashboard.product-category.add');
    }

    public function store(CreateProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        $this->StoredToaster();
        return back();
    }

    public function show(ProductCategory $productCategory)
    {
        return view('dashboard.product-category.show', compact('ProductCategory'));
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('dashboard.product-category.edit', compact('productCategory'));
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validated());
        $this->UpdatedToaster();
        return to_route('dashboard.product-categories.index');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        $this->DeletedToaster();
        return back();
    }
}
