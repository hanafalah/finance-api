<?php

namespace Hanafalah\PuskesmasAsset\Data;

use Hanafalah\ModuleWarehouse\Data\BuildingData;
use Hanafalah\PuskesmasAsset\Contracts\Data\PustuData as DataPustuData;

class PustuData extends BuildingData implements DataPustuData
{
    public static function after(mixed $data): PustuData{
        $data->flag = 'Pustu';
        return $data;
    }
}