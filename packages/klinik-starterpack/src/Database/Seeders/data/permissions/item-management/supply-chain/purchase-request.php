<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengajuan Barang',
    'alias'       => 'purchase-request',
    'icon'        => 'stash:plan-duotone',
    'show_in_acl' => true,
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        [
            'name'       => 'Tambah Pengajuan Barang',
            'alias'      => 'store',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_acl' => true
        ],
        [
            'name'       => 'Detail Pengajuan Barang',
            'alias'      => 'show',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api',
            'show_in_data' => true,
            'show_in_acl' => true,
            'childs'      => [
                [
                    'name'       => 'Approval Pengajuan Barang',
                    'alias'      => 'approval',
                    'type'       => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ],
                [
                    'name'       => 'Report Pengajuan Barang',
                    'alias'      => 'report',
                    'type'       => Type::PERMISSION->value,
                    'guard_name' => 'api'
                ]
            ]
        ],
        [
            'name'       => 'Hapus Pengajuan Barang',
            'alias'      => 'destroy',
            'type'       => Type::PERMISSION->value,
            'guard_name' => 'api'
        ]
    ]
];
