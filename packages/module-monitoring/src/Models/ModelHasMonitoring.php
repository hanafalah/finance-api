<?php

namespace Hanafalah\ModuleMonitoring\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\ModuleMonitoring\Resources\ModelHasMonitoring\{
    ViewModelHasMonitoring,
    ShowModelHasMonitoring
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class ModelHasMonitoring extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'monitoring_id',
        'reference_type',
        'reference_id',
        'props',
    ];

    protected $casts = [
        'monitoring_name' => 'string',
        'monitoring_category_name' => 'string',
        'monitoring_category_label' => 'string'
    ];

    public function getPropsQuery(): array{
        return [
            'monitoring_name' => 'props->prop_monitoring->name',
            'monitoring_category_name' => 'props->prop_monitoring->prop_monitoring_category->name',
            'monitoring_category_label' => 'props->prop_monitoring->prop_monitoring_category->label'
        ];
    }

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewModelHasMonitoring::class;
    }

    public function getShowResource(){
        return ShowModelHasMonitoring::class;
    }

    public function monitoring(){
        return $this->belongsToModel('Monitoring');
    }

    public function reference(){
        return $this->morphTo();
    }
}
