<?php

namespace Hanafalah\ModuleMcu\Resources\McuPackage;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ShowMcuPackage extends ViewMcuPackage
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
            'price_components' => $this->relationValidation('priceComponents', function () {
                return $this->priceComponents->transform(function ($priceComponent) {
                    return $priceComponent->toShowApi()->resolve();
                });
            }),
            'treatment'        => $this->relationValidation('treatment', function () {
                return $this->treatment->toShowApi()->resolve();
            }),
            'treatments'       => $this->relationValidation('treatments', function () {
                return $this->treatments->transform(function ($treatment) {
                    return $treatment->toShowApi()->resolve();
                });
            }),
            'childs' => $this->relationValidation('childs', function () {
                return $this->childs->transform(function ($child) {
                    return $child->toShowApi()->resolve();
                });
            })
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);

        return $arr;
    }
}
