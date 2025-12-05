<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\ModuleWarehouse\Models\Building\Building;
use Hanafalah\PuskesmasAsset\Resources\Pustu\{
    ViewPustu, ShowPustu
};

class Pustu extends Building
{   
    protected $table = 'unicodes';

    // protected static function booted(): void{
    //     parent::booted();
    //     static::addGlobalScope('flag',function($query){
    //         $query->flagIn('Pustu');
    //     });
    //     static::creating(function($query){
    //         $query->flag = 'Pustu';
    //     });
    // }

    public function getViewResource(){
        return ViewPustu::class;
    }

    public function getShowResource(){
        return ShowPustu::class;
    }

    

    
}
