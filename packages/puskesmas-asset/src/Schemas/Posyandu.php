<?php

namespace Hanafalah\PuskesmasAsset\Schemas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Hanafalah\PuskesmasAsset\Contracts\Schemas\Posyandu as ContractsPosyandu;
use Hanafalah\PuskesmasAsset\Contracts\Data\PosyanduData;

class Posyandu extends Pustu implements ContractsPosyandu
{
    protected string $__entity = 'Posyandu';
    protected $__config_name = 'puseksmas-asset';
    public $posyandu_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'posyandu',
            'tags'     => ['posyandu', 'posyandu-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStorePosyandu(PosyanduData $posyandu_dto): Model{
        $posyandu = parent::prepareStorePustu($posyandu_dto);
        $this->fillingProps($posyandu, $posyandu_dto->props);
        $posyandu->save();
        return $this->posyandu_model = $posyandu;
    }

    public function posyandu(mixed $conditionals = null): Builder{
        return $this->pustu($conditionals);
    }
}