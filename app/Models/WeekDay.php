<?php

namespace App\Models;

use App\Filters\WeekDay\WeekDayFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class WeekDay extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = WeekDayFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        
    ];


}
