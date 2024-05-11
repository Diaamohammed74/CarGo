<?php

namespace App\Http\Resources\Dashboard\Tag;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'    => $this->id,
            'title' => $this->title,
        ];
    }
}
