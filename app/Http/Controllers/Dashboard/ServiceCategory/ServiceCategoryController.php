<?php

namespace App\Http\Controllers\Dashboard\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategory\UpdateServiceCategoryRequest;
use App\Http\Requests\ServiceCategory\CreateServiceCategoryRequest;
use App\Models\ServiceCategory;


class ServiceCategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $serviceCategories = ServiceCategory::useFilters()->latest()->get();
        return view('dashboard.service-category.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('dashboard.service-category.add');
    }

    public function store(CreateServiceCategoryRequest $request)
    {
        ServiceCategory::create($request->validated());
        $this->StoredToaster();
        return back();
    }

    public function show(ServiceCategory $serviceCategory)
    {
        return view('dashboard.service-category.show', compact('serviceCategory'));
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('dashboard.service-category.edit', compact('serviceCategory'));
    }

    public function update(UpdateServiceCategoryRequest $request, ServiceCategory $serviceCategory)
    {
        $serviceCategory->update($request->validated());
        $this->UpdatedToaster();
        return to_route('dashboard.service-categories.index');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();
        $this->DeletedToaster();
        return back();
    }
}
