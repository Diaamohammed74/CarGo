<?php

namespace App\Http\Resources\Dashboard\Mechanical;

use App\Enums\MechanicalJobType;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Dashboard\Specialization\SpecializationResource;
use App\Http\Resources\Dashboard\MechanicalsByOrder\MechanicalsByOrderResource;
use App\Http\Resources\Dashboard\MechanicalsFullTime\MechanicalsFullTimeResource;

class MechanicalResource extends JsonResource
{
    public function toArray($request): array
{
    return [
        'join_date'     => $this->join_date,
        'birth_date'    => $this->birth_date,
        'job_type'      => $this->job_type,
        'job_type_data' => $this->job_type['value'] == MechanicalJobType::FullTime->value
            ? new MechanicalsFullTimeResource($this->whenLoaded('fullTimeJob'))
            :  new MechanicalsByOrderResource($this->whenLoaded('byOrderJob')),
        'avg_rate'       => $this->avg_rate,
        'specialization' => new SpecializationResource($this->whenLoaded('specialization')),
    ];
}

}
