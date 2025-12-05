<?php

namespace Hanafalah\PuskesmasAsset\Resources\Surveillance;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewSurveillance extends ApiResource
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
      'id'              => $this->id,
      'name'            => $this->name,
      'reference_type'  => $this->reference_type,
      'reference_id'    => $this->reference_id,
      'subject_type'    => $this->subject_type,
      'subject_id'      => $this->subject_id,
      'subject'         => $this->prop_subject,
      'visit_patient'   => $this->prop_visit_patient
    ];
    return $arr;
  }
}
