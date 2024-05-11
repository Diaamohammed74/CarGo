<?php

namespace App\Http\Resources\Dashboard\MechanicalsFullTime;

use Illuminate\Http\Resources\Json\JsonResource;

class MechanicalsFullTimeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            // 'mechanical_id'  => $this->mechanical_id,
            'monthly_salary' => $this->monthly_salary,
        ];
    }
}
