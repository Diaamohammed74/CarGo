<?php

namespace App\Http\Controllers\Api\V1\Dashboard\VideoCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoCategory\UpdateVideoCategoryRequest;
use App\Http\Requests\VideoCategory\CreateVideoCategoryRequest;
use App\Http\Resources\Dashboard\VideoCategory\VideoCategoryResource;
use App\Models\VideoCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VideoCategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $videoCategories = VideoCategory::useFilters()->dynamicPaginate();

        return VideoCategoryResource::collection($videoCategories);
    }

    public function store(CreateVideoCategoryRequest $request): JsonResponse
    {
        $videoCategory = VideoCategory::create($request->validated());

        return $this->apiResponseStored(new VideoCategoryResource($videoCategory));
    }

    public function show(VideoCategory $videoCategory): JsonResponse
    {
        return $this->apiResponseShow(new VideoCategoryResource($videoCategory));
    }

    public function update(UpdateVideoCategoryRequest $request, VideoCategory $videoCategory): JsonResponse
    {
        $videoCategory->update($request->validated());

        return $this->apiResponseUpdated(new VideoCategoryResource($videoCategory));
    }

    public function destroy(VideoCategory $videoCategory): JsonResponse
    {
        $videoCategory->delete();

        return $this->apiResponseDeleted();
    }
}
