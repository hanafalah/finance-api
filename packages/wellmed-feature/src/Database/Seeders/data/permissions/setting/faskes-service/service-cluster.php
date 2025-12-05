<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Kluster',
    'alias'       => 'service-cluster',
    'icon'        => 'vaadin:cluster',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs' => [
        [
            'name' => 'Tambah Kluster',
            'alias' => 'store',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name' => 'Ubah Kluster',
            'alias' => 'update',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name' => 'Hapus Kluster',
            'alias' => 'destroy',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
