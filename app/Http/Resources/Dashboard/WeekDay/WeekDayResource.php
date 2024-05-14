<?php

namespace App\Http\Resources\Dashboard\WeekDay;

use Illuminate\Http\Resources\Json\JsonResource;

class WeekDayResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
        ];
    }
}
