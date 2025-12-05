<?php

namespace Hanafalah\PuskesmasAsset\Contracts\Schemas;

use Hanafalah\PuskesmasAsset\Contracts\Data\PustuData;
//use Hanafalah\PuskesmasAsset\Contracts\Data\PustuUpdateData;
use Hanafalah\ModuleWarehouse\Contracts\Schemas\Building;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\PuskesmasAsset\Schemas\Pustu
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method array updatePustu(?PustuData $pustu_dto = null)
 * @method Model prepareUpdatePustu(PustuData $pustu_dto)
 * @method bool deletePustu()
 * @method bool prepareDeletePustu(? array $attributes = null)
 * @method mixed getPustu()
 * @method ?Model prepareShowPustu(?Model $model = null, ?array $attributes = null)
 * @method array showPustu(?Model $model = null)
 * @method Collection prepareViewPustuList()
 * @method array viewPustuList()
 * @method LengthAwarePaginator prepareViewPustuPaginate(PaginateData $paginate_dto)
 * @method array viewPustuPaginate(?PaginateData $paginate_dto = null)
 * @method array storePustu(?PustuData $pustu_dto = null);
 * @method Builder pustu(mixed $conditionals = null);
 */

interface Pustu extends Building
{
    public function prepareStorePustu(PustuData $pustu_dto): Model;
    public function pustu(mixed $conditionals = null): Builder;
}