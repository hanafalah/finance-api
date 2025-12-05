<?php

namespace Hanafalah\ModuleMonitoring\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringData;

/**
 * @see \Hanafalah\ModuleMonitoring\Schemas\Monitoring
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method bool deleteMonitoring()
 * @method bool prepareDeleteMonitoring(? array $attributes = null)
 * @method mixed getMonitoring()
 * @method ?Model prepareShowMonitoring(?Model $model = null, ?array $attributes = null)
 * @method array showMonitoring(?Model $model = null)
 * @method Collection prepareViewMonitoringList()
 * @method array viewMonitoringList()
 * @method LengthAwarePaginator prepareViewMonitoringPaginate(PaginateData $paginate_dto)
 * @method array viewMonitoringPaginate(?PaginateData $paginate_dto = null)
 * @method array storeMonitoring(?MonitoringData $monitoring_dto = null)
 * @method Builder agent(mixed $conditionals = null)
 */

interface Monitoring extends DataManagement
{
}
