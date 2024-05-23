<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Models\Service;
use App\Models\Specialization;
use App\Models\ServiceCategory;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Traits\Api\MediaHandler;
use App\Http\Requests\Service\CreateServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Http\Resources\Dashboard\Service\ServiceResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
    }

    public function index()
    {
        $services = Service::useFilters()
            ->latest()
            ->with([
                'category',
                'specialization',
                'mechanicals' => [
                    'mechanicalUser' => [
                        'fullTimeJob',
                        'byOrderJob' => [
                            'city',
                        ],
                    ]
                ],
            ])
            ->get();
        return view('dashboard.services.index', compact(['services']));
    }
    public function create()
    {
        $specializations = Specialization::get();
        $categories      = ServiceCategory::get();
        return view('dashboard.services.add', compact(['categories', 'specializations']));
    }

    public function store(CreateServiceRequest $request)
    {
        $data          = $request->validated();
        $data['image'] = $this->upload($data['image'], 'uploads/images');
        $service       = Service::create($data);
        if (isset($data['tag_ids'])) {
            $service->tags()->sync($data['tag_ids']);
        }
        return back()->with('success', 'Added Successfuly.');
    }

    public function show(Service $service): JsonResponse
    {
        return $this->apiResponseShow(new ServiceResource($service));
    }
    public function edit(Service $service)
    {
        return view();
    }

    public function update(UpdateServiceRequest $request, Service $service): JsonResponse
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $this->updateMedia($data['image'], 'uploads/images', $service->image);
        }
        $service->update($data);
        $service->tags()->sync($data['tag_ids']);
        $service->load(['category', 'specialization', 'tags']);
        $service->refresh();
        return $this->apiResponseUpdated(new ServiceResource($service));
    }

    public function destroy(Service $service)
    {
        if (isset($service->image)) {
            $this->deleteMedia($service->image);
        }
        $service->delete();
        return back()->with('error', 'Deleted Successfuly.');
    }
}
