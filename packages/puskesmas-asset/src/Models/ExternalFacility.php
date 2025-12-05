<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\PuskesmasAsset\Resources\ExternalFacility\{
    ViewExternalFacility, ShowExternalFacility
};

class ExternalFacility extends Pustu
{
    protected $table = 'unicodes';

    // protected static function booted(): void{
    //     parent::booted();
    //     static::addGlobalScope('flag',function($query){
    //         $query->flagIn('ExternalFacility');
    //     });
    //     static::creating(function($query){
    //         $query->flag = 'ExternalFacility';
    //     });
    // }

    public function getViewResource(){
        return ViewExternalFacility::class;
    }

    public function getShowResource(){
        return ShowExternalFacility::class;
    }    
}
