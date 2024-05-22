<?php

namespace App\Http\Controllers\Dashboard\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\UpdateVideoRequest;
use App\Http\Requests\Video\CreateVideoRequest;
use App\Http\Resources\Dashboard\Video\VideoResource;
use App\Http\Traits\Api\MediaHandler;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VideoController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
          //
    }

    public function index(): AnonymousResourceCollection
    {
        $videos = Video::useFilters()->dynamicPaginate();
        return VideoResource::collection($videos);
    }

    public function store(CreateVideoRequest $request): JsonResponse
    {
        $data          = $request->validated();
        $data['video'] = $this->upload($data['video'], 'uploads/videos');
        $video         = Video::create($data);
        $video->tags()->sync($data['tag_ids']);
        $video->load(['category']);
        return $this->apiResponseStored(new VideoResource($video));
    }

    public function show(Video $video): JsonResponse
    {
        return $this->apiResponseShow(new VideoResource($video));
    }

    public function update(UpdateVideoRequest $request, Video $video): JsonResponse
    {
        $data = $request->validated();
        if (isset($data['video'])) {
            $this->updateMedia($data['video'], 'uploads/videos', $video->video);
        }
        $video->update($data);
        $video->tags()->sync($data['tag_ids']);
        $video->load(['category']);
        return $this->apiResponseUpdated(new VideoResource($video));
    }

    public function destroy(Video $video): JsonResponse
    {
        if (isset($video->video)) {
            $this->deleteMedia($video->video);
        }
        $video->delete();
        return $this->apiResponseDeleted();
    }
}
