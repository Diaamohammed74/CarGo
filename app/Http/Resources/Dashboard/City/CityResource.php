<?php

namespace App\Http\Resources\Dashboard\City;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'           => $this->id,
            'city_name_ar' => $this->city_name_ar,
            'city_name_en' => $this->city_name_en,
        ];
    }
}
