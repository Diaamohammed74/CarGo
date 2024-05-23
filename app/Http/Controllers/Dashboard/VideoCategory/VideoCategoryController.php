<?php

namespace App\Http\Controllers\Dashboard\VideoCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoCategory\UpdateVideoCategoryRequest;
use App\Http\Requests\VideoCategory\CreateVideoCategoryRequest;
use App\Http\Resources\Dashboard\VideoCategory\VideoCategoryResource;
use App\Models\VideoCategory;

class VideoCategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $serviceCategories = VideoCategory::useFilters()->latest()->get();
        return view('dashboard.video-category.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('dashboard.video-category.add');
    }

    public function store(CreateVideoCategoryRequest $request)
    {
        VideoCategory::create($request->validated());
        return back()->with('success', 'Added Successfully');
    }

    public function show(VideoCategory $videoCategory)
    {
        return view('dashboard.video-category.show', compact('videoCategory'));
    }

    public function edit(VideoCategory $videoCategory)
    {
        return view('dashboard.video-category.edit', compact('videoCategory'));
    }

    public function update(UpdateVideoCategoryRequest $request, VideoCategory $videoCategory)
    {
        $videoCategory->update($request->validated());
        return to_route('dashboard.video-categories.index')->with('success', 'Updated Successfully');
    }

    public function destroy(VideoCategory $videoCategory)
    {
        $videoCategory->delete();
        return back()->with('error', 'Deleted Successfully');
    }
}
