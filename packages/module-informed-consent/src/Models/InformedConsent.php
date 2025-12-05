<?php

namespace Hanafalah\ModuleInformedConsent\Models;

use Hanafalah\ModuleInformedConsent\Resources\InformedConsent\{ViewInformedConsent,ShowInformedConsent};
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class InformedConsent extends BaseModel
{
    use HasUlids, HasProps;

    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    protected $list       = [
        'id', 'transaction_id', 'author_id', 'author_type', 
        'master_informed_consent_id', 'status', 'props'
    ];
    protected $show       = [];

    public function getViewResource(){return ViewInformedConsent::class;}
    public function getShowResource(){return ShowInformedConsent::class;}
    //END EIGER SECTION
    public function author(){return $this->morphTo();}
    public function transaction(){return $this->belongsToModel('Transaction');}
    public function masterInformedConsent(){return $this->belongsToModel('MasterInformedConsent');}
}
