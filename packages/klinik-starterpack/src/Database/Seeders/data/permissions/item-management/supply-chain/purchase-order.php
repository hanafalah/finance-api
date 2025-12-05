<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pemesanan Barang',
    'alias'       => 'purchase-order',
    'icon'        => 'stash:plan-duotone',
    'show_in_acl' => true,
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Ubah Pemesanan Barang',
            'alias'      => 'update',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name'       => 'Detail Pemesanan Barang',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true,
            'show_in_data' => true
        ],
        [
            'name'       => 'Hapus Pemesanan Barang',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
