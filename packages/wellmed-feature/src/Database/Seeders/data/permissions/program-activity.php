<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Program dan Kegiatan', 
    'alias'      => 'api.program-activity',
    'icon'       => 'fluent:patient-20-regular',
    'type'       => Type::MENU->value,
    'show_in_acl' => true,
    'ordering'    => 4,
    'guard_name' => 'api',
    'childs'     => [
        include(__DIR__.'/program-activity/program.php'),
        include(__DIR__.'/program-activity/activity-list.php'),
        include(__DIR__.'/program-activity/surveillance.php')
    ]
];