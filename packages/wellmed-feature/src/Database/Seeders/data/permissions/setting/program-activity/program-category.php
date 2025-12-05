<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Kategori Program',
    'alias'       => 'program-category',
    'icon'        => 'iconamoon:category-fill',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs' => [
        [
            'name' => 'Tambah Kategori',
            'alias' => 'store',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name' => 'Ubah Kategori',
            'alias' => 'update',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api'
        ],
        [
            'name' => 'Hapus Kategori',
            'alias' => 'destroy',
            'type' => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
