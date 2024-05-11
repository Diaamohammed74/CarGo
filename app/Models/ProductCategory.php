<?php

namespace App\Models;

use App\Filters\ProductCategory\ProductCategoryFilters;
use App\Http\Traits\Api\Slugify;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductCategory extends Model
{
    use HasFactory, Filterable,Slugify;

    protected string $default_filters = ProductCategoryFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
