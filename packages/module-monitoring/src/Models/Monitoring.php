<?php

namespace Hanafalah\ModuleMonitoring\Models;

use Hanafalah\LaravelSupport\Models\BaseModel;
use Hanafalah\ModuleMonitoring\Resources\Monitoring\{ViewMonitoring, ShowMonitoring};
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monitoring extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;

    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'name',
        'monitoring_category_id',
        'reference_type',
        'reference_id',
        'author_type',
        'author_id',
        'start_date',
        'end_date',
        'props'
    ];

    protected $casts = [
        'name' => 'string',
        'monitoring_category_id' => 'string',
        'monitoring_category_name' => 'string',
        'monitoring_category_label' => 'string',
        'reference_type' => 'string',
        'reference_id' => 'string',
        'author_type' => 'string',
        'author_id' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function getPropsQuery(): array{
        return [
            'monitoring_category_name' => 'props->prop_monitoring_category->name',
            'monitoring_category_label' => 'props->prop_monitoring_category->label'
        ];
    }

    public function viewUsingRelation(): array
    {
        return [];
    }

    public function showUsingRelation(): array
    {
        return ['monitoringCategory'];
    }

    public function monitoringCategory(){
        return $this->belongsToModel('MonitoringCategory');
    }

    public function modelHasMonitoring(){
        return $this->hasOneModel('ModelHasMonitoring','monitoring_id');
    }

    public function modelHasMonitorings(){
        return $this->hasManyModel('ModelHasMonitoring','monitoring_id');
    }

    public function getShowResource(){
        return ShowMonitoring::class;
    }

    public function getViewResource()
    {
        return ViewMonitoring::class;
    }
}
