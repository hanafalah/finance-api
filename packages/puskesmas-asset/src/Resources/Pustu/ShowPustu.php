<?php

namespace Hanafalah\PuskesmasAsset\Resources\Pustu;

use Hanafalah\ModuleWarehouse\Resources\Building\ShowBuilding;

class ShowPustu extends ViewPustu
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr  = [];
    $show = $this->resolveNow(new ShowBuilding($this));
    $arr  = $this->mergeArray(parent::toArray($request),$show,$arr);
    return $arr;
  }
}
