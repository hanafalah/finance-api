<?php

namespace Hanafalah\ModuleHandwriting\Resources;

use Hanafalah\LaravelSupport\Resources\ApiResource;
use Illuminate\Http\Request;

class ViewDigitalSign extends ApiResource{
    public function toArray(Request $request): array
    {
        $arr = [
            'id'    => $this->id,
            'sign'  => $this->getImage()
        ];
        return $arr;
    }
}