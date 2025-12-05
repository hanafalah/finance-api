<?php

use Hanafalah\WellmedFeature\{
    Commands,
};

return [
    "namespace"     => "Hanafalah\\WellmedFeature",
    "paths"         => [
        "local_path"   => "repositories",
        "base_path"    => __DIR__.'\\..\\'
    ],
    'app' => [
        'contracts' => [
        ],
    ],
    'commands'  => [
        Commands\InstallMakeCommand::class
    ],
    'libs' => [
        'asset' => '../assets',
        'config' => '../assets/config',
        'migration' => '../assets/database/migrations',
        'model' => 'Models',
        'controller' => 'Controllers',
        'provider' => 'Providers',
        'contract' => 'Contracts',
        'concern' => 'Concerns',
        'command' => 'Commands',
        'route' => 'Routes',
        'import' => 'Imports',
        'data' => 'Data',
        'resource' => 'Resources',
        'seeder' => 'Database/Seeders',
        'middleware' => 'Middleware',
        'request' => 'Requests',
        'support' => 'Supports',
        'schema' => 'Schemas',
        'facade' => 'Facades',
    ],
    'database' => [
        'models' => [
        ]
    ]
];
