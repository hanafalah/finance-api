<?php

namespace Hanafalah\PuskesmasAsset\Resources\ExternalFacility;

use Hanafalah\PuskesmasAsset\Resources\Pustu\ViewPustu;

class ViewExternalFacility extends ViewPustu
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
      'label' => $this->label
    ];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
