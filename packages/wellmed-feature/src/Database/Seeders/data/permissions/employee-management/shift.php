<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'          => 'Shift Kerja',
    'alias'         => 'employee',
    'icon'          => 'fluent:people-team-20-regular',
    'type'          => Type::MENU->value,
    'show_in_acl'   => true,
    'guard_name'    => 'api',
    'childs'        => [
        [
            'name'       => 'Tambah Shift',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Ubah Shift',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Hapus Shift',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
    ]
];
