<?php

namespace Hanafalah\PuskesmasAsset\Schemas;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\PuskesmasAsset\Contracts\Schemas\ExternalFacility as ContractsExternalFacility;
use Hanafalah\PuskesmasAsset\Contracts\Data\ExternalFacilityData;

class ExternalFacility extends Pustu implements ContractsExternalFacility
{
    protected string $__entity = 'ExternalFacility';
    protected $__config_name = 'puseksmas-asset';
    public $external_facility_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'external_facility',
            'tags'     => ['external_facility', 'external_facility-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreExternalFacility(ExternalFacilityData $external_facility_dto): Model{
        $external_facility = parent::prepareStorePustu($external_facility_dto);
        $this->fillingProps($external_facility, $external_facility_dto->props);
        $external_facility->save();
        return $this->external_facility_model = $external_facility;
    }
}