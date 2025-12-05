<?php

namespace Hanafalah\ModuleMonitoring\Contracts\Schemas;

use Hanafalah\ModuleMonitoring\Contracts\Data\ModelHasMonitoringData;
//use Hanafalah\ModuleMonitoring\Contracts\Data\ModelHasMonitoringUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMonitoring\Schemas\ModelHasMonitoring
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateModelHasMonitoring(?ModelHasMonitoringData $model_has_monitoring_dto = null)
 * @method Model prepareUpdateModelHasMonitoring(ModelHasMonitoringData $model_has_monitoring_dto)
 * @method bool deleteModelHasMonitoring()
 * @method bool prepareDeleteModelHasMonitoring(? array $attributes = null)
 * @method mixed getModelHasMonitoring()
 * @method ?Model prepareShowModelHasMonitoring(?Model $model = null, ?array $attributes = null)
 * @method array showModelHasMonitoring(?Model $model = null)
 * @method Collection prepareViewModelHasMonitoringList()
 * @method array viewModelHasMonitoringList()
 * @method LengthAwarePaginator prepareViewModelHasMonitoringPaginate(PaginateData $paginate_dto)
 * @method array viewModelHasMonitoringPaginate(?PaginateData $paginate_dto = null)
 * @method array storeModelHasMonitoring(?ModelHasMonitoringData $model_has_monitoring_dto = null)
 * @method Collection prepareStoreMultipleModelHasMonitoring(array $datas)
 * @method array storeMultipleModelHasMonitoring(array $datas)
 */

interface ModelHasMonitoring extends DataManagement
{
    public function prepareStoreModelHasMonitoring(ModelHasMonitoringData $model_has_monitoring_dto): Model;
}