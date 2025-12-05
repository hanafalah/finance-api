<?php

namespace Hanafalah\ModuleMonitoring\Resources\Monitoring;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewMonitoring extends ApiResource
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
      'id'   => $this->id,
      'name' => $this->name,
      'monitoring_category_id' => $this->monitoring_category_id,
      'monitoring_category' => $this->prop_monitoring_category,
      'reference_id' => $this->reference_id,
      'author_id' => $this->author_id,
      'author' => $this->prop_author,
      'start_date' => $this->start_date,
      'end_date' => $this->end_date,
    ];
    return $arr;
  }
}
