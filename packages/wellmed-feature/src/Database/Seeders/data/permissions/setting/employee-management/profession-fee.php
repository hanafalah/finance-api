<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Upah Profesi', 
    'alias'       => 'profession-fee',
    'icon'        => 'solar:wallet-money-bold',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Upah Profesi',
            'alias'      => 'tambah',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Ubah Upah Profesi',
            'alias'      => 'ubah',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Upah Profesi',
            'alias'      => 'hapus',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];

