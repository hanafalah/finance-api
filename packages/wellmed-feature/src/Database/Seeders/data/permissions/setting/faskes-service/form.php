<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Master Formulir Pemeriksaan',
    'alias'       => 'form',
    'icon'        => 'fluent:form-multiple-48-regular',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
];
