<?php

namespace Hanafalah\ModuleMonitoring\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Schemas\Unicode;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringCategoryData;
//use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringCategoryUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMonitoring\Schemas\MonitoringCategory
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateMonitoringCategory(?MonitoringCategoryData $monitoring_category_dto = null)
 * @method Model prepareUpdateMonitoringCategory(MonitoringCategoryData $monitoring_category_dto)
 * @method bool deleteMonitoringCategory()
 * @method bool prepareDeleteMonitoringCategory(? array $attributes = null)
 * @method mixed getMonitoringCategory()
 * @method ?Model prepareShowMonitoringCategory(?Model $model = null, ?array $attributes = null)
 * @method array showMonitoringCategory(?Model $model = null)
 * @method Collection prepareViewMonitoringCategoryList()
 * @method array viewMonitoringCategoryList()
 * @method LengthAwarePaginator prepareViewMonitoringCategoryPaginate(PaginateData $paginate_dto)
 * @method array viewMonitoringCategoryPaginate(?PaginateData $paginate_dto = null)
 * @method array storeMonitoringCategory(?MonitoringCategoryData $monitoring_category_dto = null)
 * @method Collection prepareStoreMultipleMonitoringCategory(array $datas)
 * @method array storeMultipleMonitoringCategory(array $datas)
 */

interface MonitoringCategory extends Unicode
{
    public function prepareStoreMonitoringCategory(MonitoringCategoryData $monitoring_category_dto): Model;
    public function monitoringCategory(mixed $conditionals = null): Builder;
}