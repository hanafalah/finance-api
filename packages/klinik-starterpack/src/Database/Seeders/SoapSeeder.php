<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleExamination\Contracts\Data\Form\SoapData;
use Illuminate\Database\Seeder;

class SoapSeeder extends Seeder
{
    use HasRequestData;

    public function run()
    {
        echo "[DEBUG] Booting ".class_basename($this)."\n";
        $arr = [
            'id' => null,
            'name' => 'SOAP',
            'ordering' => null,
            'screening_has_forms' => [
            ]
        ];
        $forms = app(config('database.models.Form'))->get();
        $screening_has_form = &$arr['screening_has_forms'];
        foreach ($forms as $form) {
            $screening_has_form[] = [
                'id' => null,
                'form_id' => $form->getKey(),
                'form_type' => $form->type,
                'ordering' => $form->ordering ?? 1,
                'examination_key' => $form->examination_key
            ];
        }
        app(config('app.contracts.Soap'))->prepareStoreSoap($this->requestDTO(config('app.contracts.SoapData'),$arr));
    }
}
