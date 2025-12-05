<?php

namespace Hanafalah\ModuleMonitoring\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleMonitoring\Contracts;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringData;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends PackageManagement implements Contracts\Schemas\Monitoring
{
    protected string $__entity = 'Monitoring';
    public $monitoring_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'monitoring',
            'tags'     => ['monitoring', 'monitoring-index'],
            'duration'  => 24*60*7
        ]
    ];

    public function prepareStoreMonitoring(MonitoringData $monitoring_dto): Model{
        $add = [
            'name' => $monitoring_dto->name,
            'author_type' => $monitoring_dto->author_type,
            'author_id' => $monitoring_dto->author_id,
            'start_date' => $monitoring_dto->start_date,
            'end_date' => $monitoring_dto->end_date
        ];
        if (isset($monitoring_dto->id)){
            $guard = ['id' => $monitoring_dto->id];
            $add = $this->mergeArray($add, [
                'monitoring_category_id' => $monitoring_dto->monitoring_category_id
            ]);
        }else{
            $guard = [
                'monitoring_category_id' => $monitoring_dto->monitoring_category_id,
                'reference_type' => $monitoring_dto->reference_type,
                'reference_id' => $monitoring_dto->reference_id
            ];
        }
        $monitoring = $this->usingEntity()->updateOrCreate($guard, $add);

        $reference = $this->{$monitoring_dto->reference_type.'Model'}()->findOrFail($monitoring_dto->reference_id);
        $monitoring_dto->props['prop_reference'] = $reference->toViewApi()->resolve();

        $this->fillingProps($monitoring, $monitoring_dto->props);
        $monitoring->save();
        return $this->monitoring_model = $monitoring;
    }
}
