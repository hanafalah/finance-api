<?php

namespace Hanafalah\PuskesmasAsset\Schemas;

use Hanafalah\ModuleWarehouse\Schemas\Building;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Hanafalah\PuskesmasAsset\Contracts\Schemas\Pustu as ContractsPustu;
use Hanafalah\PuskesmasAsset\Contracts\Data\PustuData;

class Pustu extends Building implements ContractsPustu
{
    protected string $__entity = 'Pustu';
    public $pustu_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'pustu',
            'tags'     => ['pustu', 'pustu-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStorePustu(PustuData $pustu_dto): Model{
        $add = [
            'name'      => $pustu_dto->name
        ];
        if (isset($pustu_dto->id)){
            $guard  = ['id' => $pustu_dto->id];
            $create = [$guard,$add];
        }else{
            $create = [$add];
        }
        $pustu = $this->usingEntity()->updateOrCreate(...$create);

        if (isset($pustu_dto->props->address)) $this->addingAddress($dto,$pustu);

        $this->fillingProps($pustu, $pustu_dto->props);
        $pustu->save();
        return $this->pustu_model = $pustu;
    }

    protected function addingAddress(&$dto,$model){
        if (isset($dto->props->address)) {
            $address             = &$dto->props->address;
            $address->model_type = $model->getMorphClass();
            $address->model_id   = $model->getKey(); 
            $address_model       = $this->schemaContract('address')->prepareStoreAddress($address);
            $address->id         = $address_model->getKey();
            unset($address->props);
        }
    }

    public function pustu(mixed $conditionals = null): Builder{
        return $this->building($conditionals);
    }
}