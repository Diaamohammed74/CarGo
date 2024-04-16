<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Http\Requests\Admin\CreateAdminRequest;
use App\Http\Resources\Dashboard\Admin\AdminResource;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $admins = Admin::useFilters()->dynamicPaginate();

        return AdminResource::collection($admins);
    }

    public function store(CreateAdminRequest $request): JsonResponse
    {
        $admin = Admin::create($request->validated());

        return $this->apiResponseStored('Admin created successfully', new AdminResource($admin));
    }

    public function show(Admin $admin): JsonResponse
    {
        return $this->responseSuccess(null, new AdminResource($admin));
    }

    public function update(UpdateAdminRequest $request, Admin $admin): JsonResponse
    {
        $admin->update($request->validated());

        return $this->responseSuccess('Admin updated Successfully', new AdminResource($admin));
    }

    public function destroy(Admin $admin): JsonResponse
    {
        $admin->delete();

        return $this->apiResponseDeleted();
    }

   
}
