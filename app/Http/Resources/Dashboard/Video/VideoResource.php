<?php

namespace App\Http\Resources\Dashboard\Video;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'          => $this->id,
            'video'       => $this->video,
            'title'       => $this->title,
            'slug'        => $this->slug,
            'description' => $this->description,
            'price'       => $this->price,
            
        ];
    }
}
