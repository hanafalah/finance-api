<?php

namespace Hanafalah\ModuleInformedConsent\Resources\MasterConsent;


use Hanafalah\LaravelSupport\Resources\Unicode\ViewUnicode;

class ViewMasterConsent extends ViewUnicode
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        $arr = [
            'form' => $this->form
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);
        return $arr;
    }
}
