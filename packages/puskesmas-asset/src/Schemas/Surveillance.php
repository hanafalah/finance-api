<?php

namespace Hanafalah\PuskesmasAsset\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\PuskesmasAsset\{
    Supports\BasePuskesmasAsset
};
use Hanafalah\PuskesmasAsset\Contracts\Schemas\Surveillance as ContractsSurveillance;
use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceData;

class Surveillance extends BasePuskesmasAsset implements ContractsSurveillance
{
    protected string $__entity = 'Surveillance';
    public $surveillance_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'surveillance',
            'tags'     => ['surveillance', 'surveillance-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreSurveillance(SurveillanceData $surveillance_dto): Model{
        $add = [
            'name' => $surveillance_dto->name
        ];
        if (isset($surveillance_dto->id)){
            $guard = ['id' => $surveillance_dto->id];
        }else{
            $guard = [
                'reference_type' => $surveillance_dto->reference_type,
                'reference_id' => $surveillance_dto->reference_id,
                'subject_type' => $surveillance_dto->subject_type,
                'subject_id' => $surveillance_dto->subject_id
            ];
        }
        $create = [$guard, $add];
        $surveillance = $this->usingEntity()->updateOrCreate(...$create);

        if (isset($surveillance_dto->visit_patients) && count($surveillance_dto->visit_patients) > 0){
            foreach ($surveillance_dto->visit_patients as &$visit_patient) {
                $visit_patient_dto = &$surveillance_dto->visit_patient;
                $visit_patient_dto->reference_type = $surveillance->getMorphClass();
                $visit_patient_dto->reference_id = $surveillance->getKey();
                $visit_patient = $this->schemaContract('visit_patient')->prepareStoreVisitPatient($visit_patient_dto);
                $surveillance_dto->props['prop_visit_patient'] = $listen_data = $visit_patient->toViewApi()->resolve();
                $surveillance->listenProp($visit_patient,array_keys($listen_data));
            }
        }

        $this->fillingProps($surveillance,$surveillance_dto->props);
        $surveillance->save();
        return $this->surveillance_model = $surveillance;
    }
}