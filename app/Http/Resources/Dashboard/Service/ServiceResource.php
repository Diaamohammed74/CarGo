<?php

namespace App\Http\Resources\Dashboard\Service;

use App\Http\Resources\Dashboard\Mechanical\MechanicalResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Dashboard\ServiceCategory\ServiceCategoryResource;
use App\Http\Resources\Dashboard\Specialization\SpecializationResource;
use App\Http\Resources\Dashboard\Tag\TagResource;
use App\Http\Resources\Dashboard\User\UserResource;

class ServiceResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'               => $this->id,
            'title'            => $this->title,
            'img'              => $this->image,
            'description'      => $this->description,
            'price'            => $this->price,
            'service_category' => new ServiceCategoryResource($this->whenLoaded('category')),
            'specialization'   => new SpecializationResource($this->whenLoaded('specialization')),
            'mechanicals'      => UserResource::collection($this->whenLoaded('mechanicals')),
            'tags'             => TagResource::collection($this->whenLoaded('tags')),
                    // 'created_at'       => $this->created_at->format('Y-m-d H:i:s'),
                    // 'updated_at'       => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
