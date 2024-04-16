<?php

namespace App\Http\Resources\Dashboard\Mechanical;

use App\Http\Resources\Dashboard\Specialization\SpecializationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MechanicalResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'join_date'       => $this->join_date,
            'birth_date'      => $this->birth_date,
            'job_type'        => $this->job_type,
            'avg_rate'        => $this->avg_rate,
            'specializations' => SpecializationResource::collection($this->whenLoaded('specializations')),
        ];
    }
}
