<?php

namespace Hanafalah\SatuSehat\Resources\OAuth2;

use Hanafalah\SatuSehat\Resources\SatuSehatLog\ViewSatuSehatLog;

class ViewOAuth2 extends ViewSatuSehatLog
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
    ];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
