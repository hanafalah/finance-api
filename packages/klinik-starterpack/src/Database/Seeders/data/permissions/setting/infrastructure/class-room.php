<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Kelas Ruangan', 
    'alias'           => 'class-room',
    'icon'            => 'ri:vip-fill',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'         => [
        [
            'name'            => 'Tambah Kelas Ruangan',
            'alias'           => 'store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl'     => true
        ],
        [
            'name'            => 'Ubah Kelas Ruangan',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'        => 'Detail Kelas Ruangan',
            'alias'       => 'show',
            'type'        => Type::PERMISSION->value,
            'guard_name'  => 'api',
            'show_in_data' => true,
            'show_in_acl' => true
        ],
        [
            'name'            => 'Hapus Kelas Ruangan',
            'alias'           => 'destroy',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
