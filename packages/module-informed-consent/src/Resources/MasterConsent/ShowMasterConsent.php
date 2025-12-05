<?php

namespace Hanafalah\ModuleInformedConsent\Resources\MasterConsent;

use Hanafalah\LaravelSupport\Resources\Unicode\ShowUnicode;
use Hanafalah\LaravelSupport\Resources\Unicode\ViewUnicode;

class ShowMasterConsent extends ViewMasterConsent
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        $arr = [];
        $show = $this->resolveNow(new ShowUnicode($this));
        $arr = $this->mergeArray(parent::toArray($request), $show, $arr);
        return $arr;
    }
}
