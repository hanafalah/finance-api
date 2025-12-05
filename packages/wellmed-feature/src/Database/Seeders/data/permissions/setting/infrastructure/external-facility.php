<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Fasilitas Luar Gedung', 
    'alias'           => 'external-facility',
    'icon'            => 'tdesign:building-5-filled',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs' => [
        [
            'name'       => 'Tambah Fasilitas',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Fasilitas',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Fasilitas',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
