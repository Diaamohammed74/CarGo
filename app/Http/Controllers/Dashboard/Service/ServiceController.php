<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Http\Requests\Service\CreateServiceRequest;
use App\Http\Resources\Dashboard\Service\ServiceResource;
use App\Http\Traits\Api\MediaHandler;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceController extends Controller
{
    use MediaHandler;
    public function __construct()
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $services = Service::useFilters()
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
            ->dynamicPaginate();
        return ServiceResource::collection($services);
    }
    

    public function store(CreateServiceRequest $request): JsonResponse
    {
        $data          = $request->validated();
        $data['image'] = $this->upload($data['image'], 'uploads/images');
        $service       = Service::create($data);
        $service->tags()->sync($data['tag_ids']);
        $service->load(['category','specialization','tags']);
        $service->refresh();
        return $this->apiResponseStored(new ServiceResource($service));
    }

    public function show(Service $service): JsonResponse
    {
        return $this->apiResponseShow(new ServiceResource($service));
    }

    public function update(UpdateServiceRequest $request, Service $service): JsonResponse
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $this->updateMedia($data['image'], 'uploads/images', $service->image);
        }
        $service->update($data);
        $service->tags()->sync($data['tag_ids']);
        $service->load(['category','specialization','tags']);
        $service->refresh();
        return $this->apiResponseUpdated(new ServiceResource($service));
    }

    public function destroy(Service $service): JsonResponse
    {
        if (isset($service->image)) {
            $this->deleteMedia($service->image);
        }
        $service->delete();
        return $this->apiResponseDeleted();
    }

}
