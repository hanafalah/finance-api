<?php

namespace Hanafalah\WellmedFeature\Contracts\Schemas;

use Hanafalah\LaravelPermission\Contracts\Schemas\Permission;
use Hanafalah\WellmedFeature\Contracts\Data\WellmedPermissionData;
//use Hanafalah\WellmedFeature\Contracts\Data\WellmedPermissionUpdateData;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\WellmedFeature\Schemas\WellmedPermission
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateWellmedPermission(?WellmedPermissionData $wellmed_permission_dto = null)
 * @method Model prepareUpdateWellmedPermission(WellmedPermissionData $wellmed_permission_dto)
 * @method bool deleteWellmedPermission()
 * @method bool prepareDeleteWellmedPermission(? array $attributes = null)
 * @method mixed getWellmedPermission()
 * @method ?Model prepareShowWellmedPermission(?Model $model = null, ?array $attributes = null)
 * @method array showWellmedPermission(?Model $model = null)
 * @method Collection prepareViewWellmedPermissionList()
 * @method array viewWellmedPermissionList()
 * @method LengthAwarePaginator prepareViewWellmedPermissionPaginate(PaginateData $paginate_dto)
 * @method array viewWellmedPermissionPaginate(?PaginateData $paginate_dto = null)
 * @method array storeWellmedPermission(?WellmedPermissionData $wellmed_permission_dto = null)
 * @method Collection prepareStoreMultipleWellmedPermission(array $datas)
 * @method array storeMultipleWellmedPermission(array $datas)
 */

interface WellmedPermission extends Permission
{
    public function prepareStoreWellmedPermission(?array $attributes = null): array;    
}