<?php

namespace App\Filters\Order;

use Essa\APIToolKit\Filters\QueryFilters;

class OrderFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
