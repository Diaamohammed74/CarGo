<?php

namespace App\Filters\ProductCategory;

use Essa\APIToolKit\Filters\QueryFilters;

class ProductCategoryFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
