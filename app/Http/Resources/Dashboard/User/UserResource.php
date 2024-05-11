<?php

namespace App\Http\Resources\Dashboard\User;

use App\Http\Resources\Dashboard\Mechanical\MechanicalResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'              => $this->id,
            'full_name'       => $this->full_name,
            'mechanical_data' => new MechanicalResource($this->whenLoaded('mechanicalUser'))
        ];
    }
}
