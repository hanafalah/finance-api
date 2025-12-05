<?php

namespace Hanafalah\ModuleMonitoring\Resources\MonitoringCategory;

use Hanafalah\LaravelSupport\Resources\Unicode\ViewUnicode;

class ViewMonitoringCategory extends ViewUnicode
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
      'id'   => $this->id,
      'name' => $this->name,
      'flag' => $this->flag,
      'label' => $this->label
    ];
    return $arr;
  }
}
