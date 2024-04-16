<?php

namespace App\Models;

use App\Filters\MechanicalAvailableTime\MechanicalAvailableTimeFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MechanicalAvailableTime extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = MechanicalAvailableTimeFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        
    ];


}
