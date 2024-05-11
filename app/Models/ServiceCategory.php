<?php

namespace App\Models;

use App\Filters\ServiceCategory\ServiceCategoryFilters;
use App\Http\Traits\Api\Slugify;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceCategory extends Model
{
    use HasFactory, Filterable,Slugify;

    protected string $default_filters = ServiceCategoryFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug'
    ];
    public function products()
    {
        return $this->hasMany(Service::class, 'service_id');
    }
}
