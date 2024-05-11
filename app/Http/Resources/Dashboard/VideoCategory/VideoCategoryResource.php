<?php

namespace App\Http\Resources\Dashboard\VideoCategory;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoCategoryResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'    => $this->id,
            'title' => $this->title,
            'slug'  => $this->slug,
        ];
    }
}
