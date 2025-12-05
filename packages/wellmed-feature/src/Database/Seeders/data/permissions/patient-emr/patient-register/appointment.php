<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

$prefix = 'patient-management.';
$prefix_directory = 'patient-management';

return [
    'name'           => 'Janji Temu', 
    'alias'          => 'appointment',
    'icon'           => 'icon-park-solid:appointment',
    'type'           => Type::MENU->value,
    'show_in_acl'    => true,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'       => 'Kelola Janji Temu',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Hapus Janji Temu',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

