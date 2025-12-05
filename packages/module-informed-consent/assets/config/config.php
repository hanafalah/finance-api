<?php

use Hanafalah\ModuleInformedConsent\{
    Models as ModuleInformedConsent,
    Contracts
};

return [
    'namespace' => 'Hanafalah\\ModuleInformedConsent',
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
    'database'   => [
        'models' => [
        ]
    ],
];
