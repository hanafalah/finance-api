<?php

namespace Hanafalah\PuskesmasAsset\Resources\Pustu;

use Hanafalah\ModuleWarehouse\Resources\Building\ViewBuilding;

class ViewPustu extends ViewBuilding
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'address'         => $this->address,
      'phone'           => $this->phone,
    ];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
