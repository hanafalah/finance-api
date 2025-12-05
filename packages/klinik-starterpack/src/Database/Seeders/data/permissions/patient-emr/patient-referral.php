<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Rujukan Pasien', 
    'alias'       => 'referral',
    'icon'        => 'healthicons:referral',
    'type'        => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name'  => 'api'
];

