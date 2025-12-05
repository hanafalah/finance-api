<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'            => 'Surat Penunjang', 
    'alias'           => 'letter-queue',
    'icon'            => 'uil:envelopes',
    'type'            => Type::MENU->value,
    'show_in_acl'     => true,
    'guard_name'      => 'api'
];
