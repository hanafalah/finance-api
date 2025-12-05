<?php

namespace Hanafalah\PuskesmasAsset\Data;

use Hanafalah\ModuleWarehouse\Data\BuildingData;
use Hanafalah\PuskesmasAsset\Contracts\Data\ExternalFacilityData as DataExternalFacilityData;

class ExternalFacilityData extends PustuData implements DataExternalFacilityData
{
    public static function after(mixed $data): ExternalFacilityData{
        $data->flag = 'ExternalFacilityData';
        $valid_labels = ['SEKOLAH', 'TEMPAT IBADAH', 'BALAI KOTA'];
        if(!in_array($data->props['label'], $valid_labels)){
            throw new \Exception('Label must be one of '.implode(', ', $valid_labels));
        }
        
        return $data;
    }
}