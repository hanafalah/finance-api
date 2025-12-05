<?php

namespace Hanafalah\PuskesmasAsset\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModulePatient\Contracts\Data\VisitPatientData;
use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceData as DataSurveillanceData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class SurveillanceData extends Data implements DataSurveillanceData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('reference_type')]
    #[MapName('reference_type')]
    public ?string $reference_type = null;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public mixed $reference_id = null;

    #[MapInputName('subject_type')]
    #[MapName('subject_type')]
    public ?string $subject_type = null;

    #[MapInputName('subject_id')]
    #[MapName('subject_id')]
    public mixed $subject_id = null;

    #[MapInputName('visit_patient')]
    #[MapName('visit_patient')]
    public ?VisitPatientData $visit_patient = null;

    #[MapInputName('visit_patients')]
    #[MapName('visit_patients')]
    #[DataCollectionOf(VisitPatientData::class)]
    public ?array $visit_patients = null;

    #[MapInputName('visit_patient_model')]
    #[MapName('visit_patient_model')]
    public ?object $visit_patient_model = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function before(array &$attributes){
        $new = static::new();
        $attributes['visit_patients'] ??= [];
        if (isset($attributes['visit_patient'])){
            $attributes['visit_patients'] = array_merge($attributes['visit_patients'], $attributes['visit_patient']);
        }

        foreach ($attributes['visit_patients'] as &$visit_patient) {
            $visit_patient['patient_type_service_id'] ??= $new->PatientTypeServiceModel()->where('label','UMUM')->firstOrFail()?->getKey();
            $visit_registration = &$visit_patient['visit_registration'];
            $visit_registration['medic_service_id']   ??= $new->MedicServiceModel()->where('label','SURVEILLANCE')->firstOrFail()?->getKey();
            $visit_registration['service_cluster_id'] ??= $new->ServiceClusterModel()->where('label','PELAYANAN LUAR GEDUNG')->firstOrFail()?->getKey();
        }
    }
}