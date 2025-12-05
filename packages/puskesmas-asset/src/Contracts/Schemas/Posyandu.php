<?php

namespace Hanafalah\PuskesmasAsset\Contracts\Schemas;

use Hanafalah\PuskesmasAsset\Contracts\Data\PosyanduData;
//use Hanafalah\PuskesmasAsset\Contracts\Data\PosyanduUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\PuskesmasAsset\Schemas\Posyandu
 * @method mixed export(string $type)
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method array updatePosyandu(?PosyanduData $posyandu_dto = null)
 * @method Model prepareUpdatePosyandu(PosyanduData $posyandu_dto)
 * @method bool deletePosyandu()
 * @method bool prepareDeletePosyandu(? array $attributes = null)
 * @method mixed getPosyandu()
 * @method ?Model prepareShowPosyandu(?Model $model = null, ?array $attributes = null)
 * @method array showPosyandu(?Model $model = null)
 * @method Collection prepareViewPosyanduList()
 * @method array viewPosyanduList()
 * @method LengthAwarePaginator prepareViewPosyanduPaginate(PaginateData $paginate_dto)
 * @method array viewPosyanduPaginate(?PaginateData $paginate_dto = null)
 * @method array storePosyandu(?PosyanduData $posyandu_dto = null);
 * @method Builder posyandu(mixed $conditionals = null);
 */

interface Posyandu extends Pustu
{
    public function prepareStorePosyandu(PosyanduData $posyandu_dto): Model;
    public function posyandu(mixed $conditionals = null): Builder;
}