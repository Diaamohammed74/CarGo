<?php

namespace App\Filters\City;

use Essa\APIToolKit\Filters\QueryFilters;

class CityFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
