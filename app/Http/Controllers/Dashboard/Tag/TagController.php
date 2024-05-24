<?php

namespace App\Http\Controllers\Dashboard\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Http\Requests\Tag\CreateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function __construct()
    {
    }


    public function index()
    {
        $tags = Tag::useFilters()->latest()->get();
        return view('dashboard.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('dashboard.tags.add');
    }

    public function store(CreateTagRequest $request)
    {
        Tag::create($request->validated());
        $this->StoredToaster();
        return back();
    }

    public function show(Tag $tag)
    {
        return view('dashboard.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        $this->UpdatedToaster();
        return to_route('dashboard.tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        $this->DeletedToaster();
        return back();
    }
}
