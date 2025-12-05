<?php

namespace Hanafalah\ModuleMonitoring\Schemas;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelSupport\Schemas\Unicode;
use Hanafalah\ModuleMonitoring\Contracts\Schemas\MonitoringCategory as ContractsMonitoringCategory;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringCategoryData;
use Illuminate\Database\Eloquent\Builder;

class MonitoringCategory extends Unicode implements ContractsMonitoringCategory
{
    protected string $__entity = 'MonitoringCategory';
    public $monitoring_category_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'monitoring_category',
            'tags'     => ['monitoring_category', 'monitoring_category-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreMonitoringCategory(MonitoringCategoryData $monitoring_category_dto): Model{
        $monitoring_category = $this->prepareStoreUnicode($monitoring_category_dto);
        return $this->monitoring_category_model = $monitoring_category;
    }

    public function monitoringCategory(mixed $conditionals = null): Builder{
        return $this->unicode();
    }
}