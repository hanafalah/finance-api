<?php

namespace Hanafalah\ModuleMcu\Models\McuServicePrice;

use Hanafalah\ModuleMcu\Resources\McuServicePrice\ShowMcuServicePrice;
use Hanafalah\ModuleMcu\Resources\McuServicePrice\ViewMcuServicePrice;
use Hanafalah\ModuleTreatment\Models\Treatment\Treatment;

class McuServicePrice extends Treatment
{
    protected $table = 'services';

    protected static function booted(): void
    {
        parent::booted();
        static::addGlobalScope('mcu_reference', function ($query) {
            $query->where($query->getModel()->getTableName() . '.reference_type', app(config('database.models.McuPackage'))->getMorphClass());
        });
    }

    public function getViewResource()
    {
        return ViewMcuServicePrice::class;
    }

    public function getShowResource()
    {
        return ShowMcuServicePrice::class;
    }

    public function transaction()
    {
        return $this->morphOneModel('Transaction', 'reference');
    }
}
