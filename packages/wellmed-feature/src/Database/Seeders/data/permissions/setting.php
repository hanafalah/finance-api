<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Pengaturan', 
    'alias'       => 'api.setting',
    'icon'        => 'mdi:cellphone-settings-variant',
    'type'        => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'ordering'    => 10,
    'childs'      => [
        include __DIR__.'/setting/acl.php',
        include __DIR__.'/setting/general-setting.php',
        include __DIR__.'/setting/employee-management.php',
        include __DIR__.'/setting/finance.php',
        include __DIR__.'/setting/infrastructure.php',
        include __DIR__.'/setting/supply-chain.php',
        include __DIR__.'/setting/faskes-service.php',
        include __DIR__.'/setting/stakeholder.php',
        include __DIR__.'/setting/patient-emr.php',
        include __DIR__.'/setting/item-management.php',
        include __DIR__.'/setting/treatment.php',
        include __DIR__.'/setting/program-activity.php',
    ]
];

