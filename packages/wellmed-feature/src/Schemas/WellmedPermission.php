<?php

namespace Hanafalah\WellmedFeature\Schemas;

use Hanafalah\LaravelPermission\Schemas\Permission;
use Hanafalah\WellmedFeature\Contracts\Schemas\WellmedPermission as ContractsWellmedPermission;
use Illuminate\Database\Eloquent\Builder;

class WellmedPermission extends Permission implements ContractsWellmedPermission
{
    protected string $__entity = 'WellmedPermission';
    public $wellmed_permission_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'wellmed_permission',
            'tags'     => ['wellmed_permission', 'wellmed_permission-index'],
            'duration' => 24 * 60
        ]
    ];


    public function prepareStoreWellmedPermission(?array $attributes = null): array{        
        $wellmed_permission = $this->prepareStorePermission($attributes);
        return $this->wellmed_permission_model = $wellmed_permission;
    }

    public function wellmedPermission(mixed $conditionals = null): Builder{
        return $this->permission($conditionals);
    }
}