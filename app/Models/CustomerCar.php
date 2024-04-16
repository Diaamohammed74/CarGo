<?php

namespace App\Models;

use App\Filters\CustomerCar\CustomerCarFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CustomerCar extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = CustomerCarFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        
    ];


}
