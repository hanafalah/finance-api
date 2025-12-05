<?php

namespace Hanafalah\ModuleMonitoring\Resources\ModelHasMonitoring;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewModelHasMonitoring extends ApiResource
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
      'monitoring_id' => $this->monitoring_id,
      'monitoring' => $this->prop_monitoring,
      'reference_type' => $this->reference_type,
      'reference_id' => $this->reference_id,
      'reference' => $this->prop_reference
    ];
    return $arr;
  }
}
