<?php

namespace App\Filters\Service;

use Essa\APIToolKit\Filters\QueryFilters;

class ServiceFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
