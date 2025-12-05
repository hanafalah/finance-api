<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Pengelolaan Payer', 
    'alias'           => 'payer',
    'icon'            => 'game-icons:coins',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs' => [
        [
            'name'       => 'Tambah Payer',
            'alias'      => 'add',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Payer',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Payer',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]

];
