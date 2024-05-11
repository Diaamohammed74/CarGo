<?php

namespace App\Http\Resources\Dashboard\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Dashboard\ProductCategory\ProductCategoryResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'               => $this->id,
            'title'            => $this->title,
            'img'              => $this->image,
            'description'      => $this->description,
            'price'            => $this->price,
            'quantity'         => $this->quantity,
            'product_category' => new ProductCategoryResource($this->whenLoaded('category')),
            'created_at'       => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at'       => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
