<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequest;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SatuSehatIntegrationSeeder extends Seeder
{
    use HasRequest;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $workspace = app(config('database.models.Workspace'))->uuid('9e7ff0f6-7679-46c8-ac3e-71da818160ee')->firstOrFail();        
        $workspace->load([
            'organizationSatuSehat',
            'addresses' => function($query){
                $query->with([
                    'province','district','subdistrict','village'
                ]);
            }
        ]);
        $organization_satu_sehat_log = $workspace->organizationSatuSehat;
        $form_payload = array_merge($organization_satu_sehat_log?->payload ?? [
            'active' => true,
            'organization_code' => config('satu-sehat.organization_id'),
            'organization_name' => $workspace->name,
            'type' => [
                "dept" => "Padma Jakarta"
            ],
            'address' => [],
            'telecom' => [
                'phone' => Str::replace('-','',$workspace->setting['phone']),
                'email' => $workspace->setting['email']
            ]
        ]);
        $addresses = $form_payload['address'] ?? [];
        foreach ($workspace->addresses as $address) {
            $new_address = [];
            switch ($address->flag){
                case 'OTHER'       : $type = 'work';break;
            }
            if (isset($addresses[$type])){
                continue;
            }else{
                if (isset($address->province) && isset($address->district) 
                    && isset($address->subdistrict) && isset($address->village)){
                    if (isset($new_address[$type])){
                        continue;
                    }
                    $new_address[$type] = [
                        'name'          => $address->name,
                        'city'          => $address->district->name,
                        'postal_code'   => $address->zip_code,
                        'province_code' => Str::replace('.','',$address->province->code),
                        'city_code'     => Str::replace('.','',$address->district->code),
                        'district_code' => Str::replace('.','',$address->subdistrict->code),
                        'village_code'  => Str::replace('.','',$address->village->code),
                        'rw'            => $address->rw,
                        'rt'            => $address->rt,
                    ];
                }
            }
        }
        dd($new_address);
        $form_payload['address'] = array_merge($addresses,$new_address);
        try {
            $organization_satu_sehat_log = app(config('app.contracts.OrganizationSatuSehat'))->useAccessToSatuSehat()
                ->prepareStoreOrganizationSatuSehat(
                $this->requestDTO(
                    config('app.contracts.OrganizationSatuSehatData'),[
                        'model' => $workspace,
                        'form'  => $form_payload
                    ]
                )
            );
            $integration = $workspace->integration['satu_sehat'];
            $integration['general']['ihs_number'] = $organization_satu_sehat_log->response['id'] ?? null;
            $workspace->save();
        } catch (\Throwable $th) {
            dd($form_payload);
        }
        $workspace->save();
    }
}
