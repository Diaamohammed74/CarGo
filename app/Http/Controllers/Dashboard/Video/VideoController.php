<?php

namespace App\Http\Controllers\Dashboard\Video;

use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Traits\Api\MediaHandler;
use App\Http\Requests\Video\CreateVideoRequest;
use App\Http\Requests\Video\UpdateVideoRequest;
use App\Http\Resources\Dashboard\Video\VideoResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VideoController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
          //
    }

    public function index()
    {
        $videos = Video::useFilters()->latest()->dynamicPaginate();
        return view('dashboard.videos.index', compact('videos'));
    }
    public function create()
    {
        $categories = VideoCategory::latest()->get();
        return view('dashboard.videos.add', compact('categories'));
    }

    public function store(CreateVideoRequest $request)
    {
        $data          = $request->validated();
        $data['video'] = $this->upload($data['video'], 'uploads/videos');
        $video         = Video::create($data);
        // $video->tags()->sync($data['tag_ids']);
        $this->StoredToaster();
        return back();
    }

    public function show(Video $video)
    {
        return $this->apiResponseShow(new VideoResource($video));
    }
    public function edit(Video $video)
    {
        $categories = VideoCategory::latest()->get();
        return view('dashboard.videos.edit', compact(['categories','video']));
    }
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $data = $request->validated();
        if (isset($data['video'])) {
            $this->updateMedia($data['video'], 'uploads/videos', $video->video);
        }
        $video->update($data);
        // $video->tags()->sync($data['tag_ids']);
        $this->UpdatedToaster();
        return to_route('dashboard.videos.index');
    }

    public function destroy(Video $video)
    {
        if (isset($video->video)) {
            $this->deleteMedia($video->video);
        }
        $video->delete();
        $this->DeletedToaster();
        return back();
    }
}
