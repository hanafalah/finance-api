<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Gedung', 
    'alias'           => 'building',
    'icon'            => 'mingcute:building-5-fill',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'          => [
        [
            'name'       => 'Tambah Gedung',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Gedung',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Gedung',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
