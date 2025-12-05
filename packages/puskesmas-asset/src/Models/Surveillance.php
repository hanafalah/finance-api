<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Hanafalah\ModulePatient\Resources\VisitPatient\ViewVisitPatient;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\PuskesmasAsset\Resources\Surveillance\{
    ViewSurveillance, ShowSurveillance
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Surveillance extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'name',
        'reference_type',
        'reference_id',
        'subject_type',
        'subject_id',
        'props',
    ];

    protected $casts = [
        'name' => 'string',
        'reference_type' => 'string',
        'reference_name' => 'string',
        'subject_type' => 'string',
        'subject_id' => 'string',
        'subject_name' => 'string'
    ];
    
    protected $prop_attributes = [
        'VisitPatient' => ViewVisitPatient::class
    ];

    public function getPropsQuery(): array{
        return [
            'reference_name' => 'props->prop_reference->name',
            'subject_name' => 'props->prop_subject->name',
        ];
    }

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [
            'reference', 
            'subject',
            'visitPatients'
        ];
    }

    public function getViewResource(){return ViewSurveillance::class;}
    public function getShowResource(){return ShowSurveillance::class;}

    public function visitPatient(){return $this->morphOneModel('VisitPatient','reference');}
    public function visitPatients(){return $this->morphManyModel('VisitPatient','reference');}
    public function reference(){return $this->morphTo();}
    public function subject(){return $this->morphTo();}   
}
