<?php

namespace Hanafalah\PuskesmasAsset\Resources\ExternalFacility;

use Hanafalah\PuskesmasAsset\Resources\Pustu\ShowPustu;

class ShowExternalFacility extends ViewExternalFacility
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
    $show = $this->resolveNow(new ShowPustu($this));
    $arr  = $this->mergeArray(parent::toArray($request),$show,$arr);
    return $arr;
  }
}
