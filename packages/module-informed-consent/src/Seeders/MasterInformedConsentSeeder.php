<?php

namespace Hanafalah\ModuleInformedConsent\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleInformedConsent\Contracts\Schemas\MasterInformedConsent as SchemasMasterInformedConsent;
use Illuminate\Database\Seeder;

class MasterInformedConsentSeeder extends Seeder
{
    use HasRequestData;
    public function run()
    {

        $masterInformedConsent = app(config('app.contracts.MasterInformedConsent', SchemasMasterInformedConsent::class));

        $datas = [
            [
                "name" => "Surat Sakit",
                "label" => "SICK_LATTER",
                'form' => [
                    "first_date"          => '',
                    "last_date"           => '',
                ]
            ],
            [
                "name" => "Surat Sehat",
                "label" => "HEALTH_LATTER",
                'form' => [
                    "description" => "",
                ]
            ],
            ["name" => "Persetujuan Tindakan Medis", "label" => "APPROVE_TREATMENT", 'form' => [
                "diagnosis_wd"          => '',
                "basic_diagnosis"       => '',
                "medical_procedure"     => '',
                "procedure_indications" => '',
                "procedure_steps"       => '',
                "objectives"            => '',
                "risks"                 => '',
                "complications"         => '',
                "prognosis"             => '',
                "alternatives"          => '',
                "approve_by"            => '',
            ]],
            ["name" => "Penolakan Tindakan Medis", "label" => "REJECT_TREATMENT", 'form' => [
                "diagnosis_wd"          => '',
                "basic_diagnosis"       => '',
                "medical_procedure"     => '',
                "procedure_indications" => '',
                "procedure_steps"       => '',
                "objectives"            => '',
                "risks"                 => '',
                "complications"         => '',
                "prognosis"             => '',
                "alternatives"          => '',
                "approve_by"            => '',
            ]]
        ];

        foreach ($datas as $data) {
            $masterInformedConsent->prepareStoreMasterInformedConsent(
                $this->requestDTO(config('app.contracts.MasterInformedConsentData'), $data)
            );
        }
    }
}
