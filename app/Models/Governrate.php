<?php

namespace App\Models;

use App\Filters\Governrate\GovernrateFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Governrate extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = GovernrateFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        
    ];


}
