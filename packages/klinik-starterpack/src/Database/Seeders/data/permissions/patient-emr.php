<?php

use Hanafalah\LaravelPermission\Enums\Permission\Type;

return [
    'name'       => 'Registrasi Dan Antrian Pasien', 
    'alias'      => 'api.patient-emr',
    'icon'       => 'fluent:patient-20-regular',
    'type'       => Type::MENU->value,
    'show_in_acl' => true,
    'guard_name' => 'api',
    'ordering'   => 1,
    'childs'     => [
        include(__DIR__.'/patient-emr/visit-patient.php'),
        include(__DIR__.'/patient-emr/visit-registration.php'),
        include(__DIR__.'/patient-emr/patient-referral.php'),
        // include(__DIR__.'/patient-emr/appointment.php'),
        // include(__DIR__.'/patient-emr/reservation.php'),
        include(__DIR__.'/patient-emr/letter-queue.php'),
        // include(__DIR__.'/patient-emr/emergency-unit.php'),
        // include(__DIR__.'/patient-emr/medical-checkup.php'),
        // include(__DIR__.'/patient-emr/nurse-station.php'),
        // include(__DIR__.'/patient-emr/verlos-kamer.php'),
        include(__DIR__.'/patient-emr/visit-pustu.php'),
        // include(__DIR__.'/patient-emr/visit-posyandu.php'),
        // include(__DIR__.'/patient-emr/laboratorium.php'),
        // include(__DIR__.'/patient-emr/radiology.php'),
        include(__DIR__.'/patient-emr/referral.php'),
        // include(__DIR__.'/patient-emr/inpatient.php')
    ]
];

