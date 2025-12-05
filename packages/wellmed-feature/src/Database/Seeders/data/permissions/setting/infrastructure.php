<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Infrastruktur dan Jejaring Faskes', 
    'alias'       => 'infrastructure',
    'icon'        => 'eos-icons:neural-network',
    'type'        => Type::MODULE->value,
    'show_in_acl' => true,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/infrastructure/agent.php',
        include __DIR__.'/infrastructure/company.php',
        include __DIR__.'/infrastructure/payer.php',
        include __DIR__.'/infrastructure/room.php',
        include __DIR__.'/infrastructure/building.php',
        include __DIR__.'/infrastructure/class-room.php',
        include __DIR__.'/infrastructure/room-item-category.php',
        include __DIR__.'/infrastructure/pustu.php',
        include __DIR__.'/infrastructure/posyandu.php',
        include __DIR__.'/infrastructure/external-facility.php',
    ]
];

