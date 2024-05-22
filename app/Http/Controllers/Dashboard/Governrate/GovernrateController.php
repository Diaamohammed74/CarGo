<?php

namespace App\Http\Controllers\Dashboard\Governrate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Governrate\UpdateGovernrateRequest;
use App\Http\Requests\Governrate\CreateGovernrateRequest;
use App\Http\Resources\Dashboard\Governrate\GovernrateResource;
use App\Models\Governrate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GovernrateController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $governrates = Governrate::useFilters()->dynamicPaginate();

        return GovernrateResource::collection($governrates);
    }

    public function store(CreateGovernrateRequest $request): JsonResponse
    {
        $governrate = Governrate::create($request->validated());

        return $this->apiResponseStored('Governrate created successfully', new GovernrateResource($governrate));
    }

    public function show(Governrate $governrate): JsonResponse
    {
        return $this->responseSuccess(null, new GovernrateResource($governrate));
    }

    public function update(UpdateGovernrateRequest $request, Governrate $governrate): JsonResponse
    {
        $governrate->update($request->validated());

        return $this->responseSuccess('Governrate updated Successfully', new GovernrateResource($governrate));
    }

    public function destroy(Governrate $governrate): JsonResponse
    {
        $governrate->delete();

        return $this->apiResponseDeleted();
    }

   
}
