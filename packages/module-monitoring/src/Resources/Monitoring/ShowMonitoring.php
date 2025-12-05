<?php

namespace Hanafalah\ModuleMonitoring\Resources\Monitoring;

class ShowMonitoring extends ViewMonitoring
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $resquest
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'reference' => $this->prop_reference,
    ];
    $arr = $this->mergeArray(parent::toArray($request), $arr);
    return $arr;
  }
}
