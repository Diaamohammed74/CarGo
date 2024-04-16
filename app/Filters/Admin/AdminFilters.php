<?php

namespace App\Filters\Admin;

use Essa\APIToolKit\Filters\QueryFilters;

class AdminFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
