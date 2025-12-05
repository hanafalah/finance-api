<?php

use Hanafalah\ModuleMcu\{
    Models as ModuleMCU,
    Commands as ModuleMcuCommands
};
use Hanafalah\ModuleMcu\Contracts;

return [
    'namespace' => 'Hanafalah\\ModuleMcu',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ]
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
    ],
    'database' => [
        'models' => [

        ]
    ],
    'commands' => [
        ModuleMcuCommands\InstallMakeCommand::class
    ]
];
