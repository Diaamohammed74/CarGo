<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Http\Requests\Tag\CreateTagRequest;
use App\Http\Resources\Dashboard\Tag\TagResource;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TagController extends Controller
{
    public function __construct()
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $tags = Tag::useFilters()->dynamicPaginate();

        return TagResource::collection($tags);
    }

    public function store(CreateTagRequest $request): JsonResponse
    {
        $tag = Tag::create($request->validated());

        return $this->apiResponseStored(new TagResource($tag));
    }

    public function show(Tag $tag): JsonResponse
    {
        return $this->apiResponseShow(new TagResource($tag));
    }

    public function update(UpdateTagRequest $request, Tag $tag): JsonResponse
    {
        $tag->update($request->validated());

        return $this->apiResponseUpdated(new TagResource($tag));
    }

    public function destroy(Tag $tag): JsonResponse
    {
        $tag->delete();
        return $this->apiResponseDeleted();
    }
}
