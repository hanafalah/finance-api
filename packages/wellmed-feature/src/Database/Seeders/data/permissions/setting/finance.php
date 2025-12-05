<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Aset Finance', 
    'alias'       => 'finance',
    'icon'        => 'mdi:finance',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/finance/bank.php',
        include __DIR__.'/finance/funding.php',
        include __DIR__.'/finance/coa.php',
        include __DIR__.'/finance/coa-type.php',
        // include __DIR__.'/finance/account-group.php',
        include __DIR__.'/finance/tariff-component.php',
        include __DIR__.'/finance/voucher.php',
        include __DIR__.'/finance/payment-method.php',
    ]
];

