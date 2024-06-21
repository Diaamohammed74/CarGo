<?php

namespace App\Models;

use App\Http\Traits\Api\Slugify;
use App\Filters\Product\ProductFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory, Filterable,Slugify;

    protected string $default_filters = ProductFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'quantity',
        'product_category_id',
        'image'
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }
    public function getImageAttribute()
    {
        return asset(Storage::url($this->attributes['image']));
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products')->withPivot('quantity');
    }
}
