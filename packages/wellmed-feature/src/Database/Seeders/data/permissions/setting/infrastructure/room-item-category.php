<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Kategori Barang Ruangan', 
    'alias'           => 'room-item-category',
    'icon'            => 'fluent:tray-item-remove-24-filled',
    'type'            => Type::MODULE->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api',
    'childs'         => [
        [
            'name'            => 'Tambah Kategori Barang',
            'alias'           => 'store',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api',
            'show_in_acl'     => true
        ],
        [
            'name'            => 'Ubah Kategori Barang',
            'alias'           => 'update',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ],
        [
            'name'            => 'Hapus Kategori Barang',
            'alias'           => 'destroy',
            'type'            => Type::PERMISSION->value,
            'guard_name'      => 'api'
        ]
    ]
];
