<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Aset Pengadaan', 
    'alias'       => 'supply-chain',
    'icon'        => 'game-icons:buy-card',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/supply-chain/supplier.php',
        include __DIR__.'/supply-chain/purchase-label.php',
        include __DIR__.'/supply-chain/receive-unit.php'
    ]
];

