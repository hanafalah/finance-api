<?php

namespace Hanafalah\ModuleHandwriting\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleHandwriting\Concerns\HasSignatureProcessing;
use Hanafalah\ModuleHandwriting\Contracts\Schemas\DigitalSign as SchemasDigitalSign;
use Hanafalah\ModuleHandwriting\Contracts\Data\DigitalSignData;
use Illuminate\Database\Eloquent\Model;

class DigitalSign extends PackageManagement implements SchemasDigitalSign{
    use HasSignatureProcessing;
        
    public $digital_model;

    private function referenceModel(string $reference_type): Model{
        return $this->{$reference_type.'Model'}();
    }

    protected function getFile(){
        return $this->digital_model->sign ?? null;
    }

    public function prepareShowDigitalSign(? Model $model = null, ?array $attributes = null): mixed{
        $this->digital_model = $model = $this->referenceModel($attributes['reference_type'])->findOrFail($attributes['reference_id']);
        if (isset($attributes['is_direct_photo']) && $attributes['is_direct_photo']) {
            return $this->getStorageFile();
        }else{
            return $model;
        }
    }

    public function showDigitalSign(? Model $model = null): mixed{
        $is_direct_photo = (strpos(request()->header('accept'), 'image/*') === 0);
        if (!$is_direct_photo){
            $digital_sign = $this->prepareShowDigitalSign($model,request()->all());
            return [
                'reference_id'   => $digital_sign->getKey(),
                'reference_type' => $digital_sign->getMorphClass(),
                'sign'           => $digital_sign->sign
            ];
        }else{
            $attributes = \request()->all();
            $attributes['is_direct_photo'] = true;
            return $this->prepareShowDigitalSign($model,$attributes);
        }
    }

    public function prepareStoreDigitalSign(DigitalSignData $digital_sign_dto): Model{
        $model = $this->referenceModel($digital_sign_dto->reference_type)->findOrFail($digital_sign_dto->reference_id);
        $this->digital_model = $model;
        $model->sign = $this->setupFile($digital_sign_dto->sign);
        $model->save();
        return $this->digital_model = $model;
    }

    public function storeDigitalSign(?DigitalSignData $digital_sign_dto = null): array{
        return $this->transaction(function() use ($digital_sign_dto){
            $digital_sign = $this->prepareStoreDigitalSign($digital_sign_dto ?? $this->requestDTO(DigitalSignData::class));
            return [
                'reference_id'   => $digital_sign->getKey(),
                'reference_type' => $digital_sign->getMorphClass(),
                'sign'           => $digital_sign->sign
            ];
        });
    }
}