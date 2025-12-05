<?php

namespace Hanafalah\ModuleInformedConsent\Resources\InformedConsent;


class ShowInformedConsent extends ViewInformedConsent
{
    public function toArray($request): array
    {
        $arr = [
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);
        return $arr;
    }
}
