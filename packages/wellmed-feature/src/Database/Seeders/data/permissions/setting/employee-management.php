<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Kepegawaian', 
    'alias'       => 'employee-management',
    'icon'        => 'fluent:people-team-20-regular',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/employee-management/employee-type.php',
        include __DIR__.'/employee-management/profession.php',
        include __DIR__.'/employee-management/shift.php',
        include __DIR__.'/employee-management/shift-schedule.php'
    ]
];

