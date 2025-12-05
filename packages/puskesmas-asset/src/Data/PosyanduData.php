<?php

namespace Hanafalah\PuskesmasAsset\Data;

use Hanafalah\ModuleWarehouse\Data\BuildingData;
use Hanafalah\PuskesmasAsset\Contracts\Data\PosyanduData as DataPosyanduData;

class PosyanduData extends BuildingData implements DataPosyanduData
{
    public static function after(mixed $data): PosyanduData{
        $data->flag = 'Posyandu';
        return $data;
    }
}