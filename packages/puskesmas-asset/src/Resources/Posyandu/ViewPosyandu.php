<?php

namespace Hanafalah\PuskesmasAsset\Resources\Posyandu;

use Hanafalah\PuskesmasAsset\Resources\Pustu\ViewPustu;

class ViewPosyandu extends ViewPustu
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
