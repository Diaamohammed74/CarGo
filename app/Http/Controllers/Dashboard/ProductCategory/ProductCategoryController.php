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
        $serviceCategories = ProductCategory::useFilters()->latest()->get();
        return view('dashboard.product-category.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('dashboard.product-category.add');
    }

    public function store(CreateProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        return back()->with('success', 'Added Successfully');
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
        return to_route('dashboard.product-categories.index')->with('success', 'Updated Successfully');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return back()->with('error', 'Deleted Successfully');
    }
}
