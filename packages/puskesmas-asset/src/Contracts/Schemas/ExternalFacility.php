<?php

namespace Hanafalah\PuskesmasAsset\Contracts\Schemas;

use Hanafalah\PuskesmasAsset\Contracts\Data\ExternalFacilityData;
//use Hanafalah\PuskesmasAsset\Contracts\Data\ExternalFacilityUpdateData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\PuskesmasAsset\Schemas\ExternalFacility
 * @method mixed export(string $type)
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method array updateExternalFacility(?ExternalFacilityData $external_facility_dto = null)
 * @method Model prepareUpdateExternalFacility(ExternalFacilityData $external_facility_dto)
 * @method bool deleteExternalFacility()
 * @method bool prepareDeleteExternalFacility(? array $attributes = null)
 * @method mixed getExternalFacility()
 * @method ?Model prepareShowExternalFacility(?Model $model = null, ?array $attributes = null)
 * @method array showExternalFacility(?Model $model = null)
 * @method Collection prepareViewExternalFacilityList()
 * @method array viewExternalFacilityList()
 * @method LengthAwarePaginator prepareViewExternalFacilityPaginate(PaginateData $paginate_dto)
 * @method array viewExternalFacilityPaginate(?PaginateData $paginate_dto = null)
 * @method array storeExternalFacility(?ExternalFacilityData $external_facility_dto = null);
 * @method Builder externalFacility(mixed $conditionals = null);
 */

interface ExternalFacility extends Pustu
{
    public function prepareStoreExternalFacility(ExternalFacilityData $external_facility_dto): Model;
}