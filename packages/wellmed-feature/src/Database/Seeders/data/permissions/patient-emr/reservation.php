<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'           => 'Data Reservasi',
    'alias'          => 'reservation',
    'icon'           => 'material-symbols:app-registration-outline-sharp',
    'type'           => Type::MENU->value,
    'show_in_acl'    => true,
    'guard_name'     => 'api',
    'childs'         => [
        [
            'name'        => 'Kelola Reservasi',
            'alias'       => 'store',
            'type'        => Type::PERMISSION->value,
            'guard_name'  => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Delete Reservasi',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

