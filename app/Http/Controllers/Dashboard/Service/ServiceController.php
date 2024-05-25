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
        $this->StoredToaster();
        return back();
    }

    public function show(Service $service): JsonResponse
    {
        return $this->apiResponseShow(new ServiceResource($service));
    }
    public function edit(Service $service)
    {
        $specializations = Specialization::get();
        $categories      = ServiceCategory::get();
        return view('dashboard.services.edit', compact(['service', 'specializations','categories']));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image']=$this->updateMedia($data['image'], 'uploads/images', $service->image);
        }
        $service->update($data);
        $this->UpdatedToaster();
        // $service->tags()->sync($data['tag_ids']);
        return to_route('dashboard.services.index');
    }

    public function destroy(Service $service)
    {
        if (isset($service->image)) {
            $this->deleteMedia($service->image);
        }
        $service->delete();
        $this->DeletedToaster();
        return back();
    }
}
