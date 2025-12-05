<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'        => 'Aset Data Obat', 
    'alias'       => 'medicine',
    'icon'        => 'fa-solid:pills',
    'type'        => Type::MODULE->value,
    'guard_name'  => 'api',
    'childs'      => [
        include __DIR__.'/medicine/dosage-form.php',
        include __DIR__.'/medicine/package-form.php',
        include __DIR__.'/medicine/therapeutic-class.php',
        include __DIR__.'/medicine/usage-location.php',
        include __DIR__.'/medicine/usage-route.php',
        include __DIR__.'/medicine/freq-unit.php',
        include __DIR__.'/medicine/medical-composition-unit.php',
        include __DIR__.'/medicine/medical-net-unit.php',
        include __DIR__.'/medicine/prescription-mix-unit.php',
    ]
];

