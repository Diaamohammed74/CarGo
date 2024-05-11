<?php

namespace App\Http\Resources\Dashboard\MechanicalsByOrder;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Dashboard\City\CityResource;

class MechanicalsByOrderResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'city' => new CityResource($this->whenLoaded('city'))
        ];
    }
}
