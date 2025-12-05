<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Aset Program dan Kegiatan', 
    'alias'       => 'program-activity',
    'icon'        => 'fluent:task-list-square-settings-20-filled',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/program-activity/program-category.php',
    ]
];

