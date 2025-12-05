<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\PuskesmasAsset\Resources\Posyandu\{
    ViewPosyandu, ShowPosyandu
};

class Posyandu extends Pustu
{
    protected $table = 'unicodes';

    // protected static function booted(): void{
    //     parent::booted();
    //     static::addGlobalScope('flag',function($query){
    //         $query->flagIn('Posyandu');
    //     });
    //     static::creating(function($query){
    //         $query->flag = 'Posyandu';
    //     });
    // }

    public function getViewResource(){
        return ViewPosyandu::class;
    }

    public function getShowResource(){
        return ShowPosyandu::class;
    }    
}
