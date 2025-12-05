<?php

namespace Hanafalah\PuskesmasAsset\Contracts\Schemas;

use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceData;
//use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\PuskesmasAsset\Schemas\Surveillance
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateSurveillance(?SurveillanceData $surveillance_dto = null)
 * @method Model prepareUpdateSurveillance(SurveillanceData $surveillance_dto)
 * @method bool deleteSurveillance()
 * @method bool prepareDeleteSurveillance(? array $attributes = null)
 * @method mixed getSurveillance()
 * @method ?Model prepareShowSurveillance(?Model $model = null, ?array $attributes = null)
 * @method array showSurveillance(?Model $model = null)
 * @method Collection prepareViewSurveillanceList()
 * @method array viewSurveillanceList()
 * @method LengthAwarePaginator prepareViewSurveillancePaginate(PaginateData $paginate_dto)
 * @method array viewSurveillancePaginate(?PaginateData $paginate_dto = null)
 * @method array storeSurveillance(?SurveillanceData $surveillance_dto = null)
 * @method Collection prepareStoreMultipleSurveillance(array $datas)
 * @method array storeMultipleSurveillance(array $datas)
 */

interface Surveillance extends DataManagement
{
    public function prepareStoreSurveillance(SurveillanceData $surveillance_dto): Model;
}