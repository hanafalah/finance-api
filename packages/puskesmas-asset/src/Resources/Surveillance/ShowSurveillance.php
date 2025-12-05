<?php

namespace Hanafalah\PuskesmasAsset\Resources\Surveillance;

class ShowSurveillance extends ViewSurveillance
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
      'visit_patient' => $this->relationValidation('visitPatient',function(){
        return $this->visitPatient->toShowApi()->resolve();
      },$this->prop_visit_patient)
    ];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  } 
}
