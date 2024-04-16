<?php

use Essa\APIToolKit\Enum\GeneratorFilesType;

return [

    'default_generates' => [
        'seeder',
        'controller',
        'request',
        'resource',
        'factory',
        'migration',
        'filter',
        'test',
        'routes',
    ],

    'default_pagination_number' => 12,
    'max_pagination_number'     => 100,

    'datetime_format' => 'Y-m-d H:i:s',

    'default_group' => 'default',

    'groups_files_paths' => [
        'default' => [
            GeneratorFilesType::MODEL => [
                'folder_path' => app_path('Models'),
                'file_name'   => '{ModelName}.php',
                'namespace'   => 'App\Models',
            ],
            GeneratorFilesType::FACTORY => [
                'folder_path' => database_path('factories'),
                'file_name'   => '{ModelName}Factory.php',
                'namespace'   => 'Database\Factories',
            ],
            GeneratorFilesType::SEEDER => [
                'folder_path' => database_path('seeders'),
                'file_name'   => '{ModelName}Seeder.php',
                'namespace'   => 'Database\Seeders',
            ],
            GeneratorFilesType::CONTROLLER => [
                'folder_path' => app_path('Http/Controllers/Api/V1/Dashboard/{ModelName}'),
                'file_name'   => '{ModelName}Controller.php',
                'namespace'   => 'App\Http\Controllers\Api\V1\Dashboard\{ModelName}',
            ],
            GeneratorFilesType::RESOURCE => [
                'folder_path' => app_path('Http/Resources/Dashboard/{ModelName}'),
                'file_name'   => '{ModelName}Resource.php',
                'namespace'   => "App\Http\Resources\Dashboard\{ModelName}",
            ],
            GeneratorFilesType::TEST => [
                'folder_path' => base_path('tests/Feature'),
                'file_name'   => '{ModelName}Test.php',
                'namespace'   => 'Tests\Feature',
            ],
            GeneratorFilesType::CREATE_REQUEST => [
                'folder_path' => app_path('Http/Requests/{ModelName}'),
                'file_name'   => 'Create{ModelName}Request.php',
                'namespace'   => "App\Http\Requests\{ModelName}",
            ],
            GeneratorFilesType::UPDATE_REQUEST => [
                'folder_path' => app_path('Http/Requests/{ModelName}'),
                'file_name'   => 'Update{ModelName}Request.php',
                'namespace'   => "App\Http\Requests\{ModelName}",
            ],
            GeneratorFilesType::FILTER => [
                'folder_path' => app_path('Filters/{ModelName}'),
                'file_name'   => '{ModelName}Filters.php',
                'namespace'   => 'App\Filters\{ModelName}',
            ],
            GeneratorFilesType::MIGRATION => [
                'folder_path' => database_path('migrations'),
                'file_name'   => date('Y_m_d_His') . '_create_{TableName}_table.php',
                'namespace'   => null,
            ],
            GeneratorFilesType::ROUTES => [
                'folder_path' => base_path('routes/api/v1/dashboard'),
                'file_name'   => 'dashboard.php',
                'namespace'   => null,
            ],
        ],
    ],

    'groups_url_prefixes' => [
        'default' => '/api/v1',
    ],
];
