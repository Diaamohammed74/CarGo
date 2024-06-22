<?php

namespace App\Filters\Service;

use Essa\APIToolKit\Filters\QueryFilters;

class ServiceFilters extends QueryFilters
{
    protected array $allowedFilters = ['service_category_id'];

    protected array $columnSearch   = ['title'];
    protected array $relationSearch = [
        'tags' => ['title'],
    ];
}
