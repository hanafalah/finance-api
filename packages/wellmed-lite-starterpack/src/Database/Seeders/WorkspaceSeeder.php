<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\MicroTenant\Contracts\Data\TenantData;
use Hanafalah\MicroTenant\Facades\MicroTenant;
use Hanafalah\ModuleRegional\Data\AddressData;
use Hanafalah\ModuleWorkspace\Data\{
    WorkspaceData,
    WorkspacePropsData,
    WorkspaceSettingData
};
use Hanafalah\ModuleWorkspace\Enums\Workspace\Status;
use Hanafalah\WellmedLiteStarterpack\Concerns\HasComposer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Projects\WellmedLite\Data\ModulePatient\IntegrationData;

class WorkspaceSeeder extends Seeder{
    use HasRequestData, HasComposer;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        config(['database.connections.tenant'=>config('database.connections.central')]);
        $workspace = app(config('database.models.Workspace'))->uuid('9e7ff0f6-7679-46c8-ac3e-71da818160ee')->first();        
        $generator_config = config('laravel-package-generator');
        $project_namespace = 'Projects';
        $group_namespace   = 'WellmedLite';
        if (!isset($workspace)){
            $tenant_namespace  = 'WellmedLiteGroup';
            $db_tenant_name = config('micro-tenant.database.database_tenant_name');
            $default = config('tenancy.database.central_connection');
            config([
                'tenancy.database.prefix' => 'lite_',
                'tenancy.database.suffix' => ''
            ]);

            $tenant_schema  = app(config('app.contracts.Tenant'));
            $tenant_model   = app(config('database.models.Tenant'));
            $project_tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => null,
                'name'           => 'Wellmed Lite',
                'flag'           => $tenant_model::FLAG_APP_TENANT,
                'reference_id'   => null,
                'reference_type' => null,
                'provider'       => $project_namespace.'\\WellmedLite\\Providers\\WellmedLiteServiceProvider',
                'path'           => $generator_config['patterns']['project']['published_at'],
                'packages'       => [],
                'has_group'      => true,
                'has_tenant'     => true,
                'product_type'   => 'LITE',
                'config'         => $generator_config['patterns']['project']
            ]));

            $database_tenant_name = config('micro-tenant.database.central_tenant');
            config([
                'tenancy.database.prefix' => $database_tenant_name['prefix'],
                'tenancy.database.suffix' => $database_tenant_name['suffix']
            ]);

            $group_tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => $project_tenant->getKey(),
                'name'           => 'Wellmed Lite',
                'flag'           => $tenant_model::FLAG_CENTRAL_TENANT,
                'reference_id'   => null,
                'reference_type' => null,
                'provider'       => $group_namespace.'\\GroupInitialWellmedLite\\Providers\\GroupInitialWellmedLiteServiceProvider',
                'app'            => ['provider' => $project_tenant->provider],
                'path'           => $generator_config['patterns']['group']['published_at'],
                'has_tenant'     => true,
                'product_type'   => 'LITE',
                'packages'       => [],
                'config'         => $generator_config['patterns']['group']
            ]));
            config([
                'tenancy.database.prefix' => $db_tenant_name['prefix'],
                'tenancy.database.suffix' => $db_tenant_name['suffix']
            ]);

            $workspace = app(config('app.contracts.Workspace'))->prepareStoreWorkspace($this->requestDTO(
                config('app.contracts.WorkspaceData'),[
                    'uuid'    => '9e7ff0f6-7679-46c8-ac3e-71da818160ee',
                    'name'    => 'Wellmed Lite',
                    'status'  => Status::ACTIVE->value,
                    'product_type'   => 'LITE',
                    'setting' => [
                        'address' => [
                            'name'           => 'sangkuriang',
                            'province_id'    => null,
                            'district_id'    => null,
                            'subdistrict_id' => null,
                            'village_id'     => null
                        ],
                        'email'   => 'hamzahnuralfalah@gmail.com',
                        'phone'   => '081906521808',
                        'owner_id' => null,
                        'owner' => [
                            'id' => null,
                            'name' => null
                        ]
                    ],
                    'integration' => [
                        "satu_sehat" => [
                            "progress" => 0,
                            "general" => [
                                "ihs_number" => null
                            ],
                            "syncs" => [
                                [
                                    'flag' => 'encounter',
                                    'label' => 'Kunjungan',
                                ],
                                [
                                    'flag' => 'condition',
                                    'label' => 'Diagnosa',
                                ], 
                                [
                                    'flag' => 'dispense',
                                    'label' => 'Resep',
                                ]
                            ]
                        ],
                        "bpjs" => [
                            "progress" => 0,
                            "syncs" => [
                                [
                                    'flag' => 'encounter',
                                    'label' => 'Kunjungan',
                                ],
                                [
                                    'flag' => 'condition',
                                    'label' => 'Diagnosa',
                                ], 
                                [
                                    'flag' => 'dispense',
                                    'label' => 'Resep',
                                ]
                            ]
                        ]
                    ],
                    
                ]
            ));
            
            $tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => $group_tenant->getKey(),
                'name'           => 'Tenant Wellmed Lite',
                'flag'           => $tenant_model::FLAG_TENANT,
                'reference_id'   => $workspace->getKey(),
                'reference_type' => $workspace->getMorphClass(),
                'domain'         => [
                    'domain' => 'localhost:8005'
                ],
                'provider' => $tenant_namespace.'\\TenantWellmedLite\\Providers\\TenantWellmedLiteServiceProvider',
                'path'     => $generator_config['patterns']['tenant']['published_at'],
                'app'      => ['provider' => $project_tenant->provider],
                'group'    => ['provider' => $group_tenant->provider],
                'packages' => [],
                'product_type'   => 'LITE',
                'is_recurring' => true,
                'recurring_period' => 'MONTHLY',
                'started_at' => now(),
                'expired_at' => now()->addYear(),
                'config'   => $generator_config['patterns']['tenant']
            ]));
            $tenant->db_name = $tenant->tenancy_db_name;
            $tenant->save();
        }else{
            $tenant         = $workspace->tenant;
            $group_tenant   = $tenant->parent;
            $project_tenant = $group_tenant->parent;
        }
        $tenant_path = $generator_config['patterns']['tenant']['published_at'];
        $providers = config('wellmed-lite-starterpack.packages');
        $providers = array_keys($providers);
        $package_providers = [];
        $requires = [
            'require' => []
        ];
        $repositories = [
            'repositories' => []
        ];
        foreach ($providers as $provider) {
            $original    = $provider;
            $provider    = explode("/", $provider);
            $provider[0] = Str::studly($provider[0]);
            $provider[1] = Str::studly($provider[1]);
            $provider    = implode('\\',$provider).'\\'.$provider[1].'ServiceProvider';
            $package_providers[$original] = [
                'provider' => $provider
            ];

            $repositories['repositories'][Str::kebab($original)] = [
                'type' => 'path',
                'url'  => '../../repositories/'.Str::afterLast($original,'/'),
                'options' => [
                    'symlink' => true
                ]
            ];
            if (Str::kebab($original) != 'hanafalah/microtenant'){
                $requires['require'][Str::kebab($original)] = 'dev-main as 1.0'; 
            }
        }
        
        $project_tenant->setAttribute('packages',$package_providers);
        $project_tenant->save();

        Artisan::call('impersonate:cache',[
            '--app_id'    => $project_tenant->getKey(),
            '--group_id'  => $group_tenant->getKey(),
            '--tenant_id' => $tenant->getKey()
        ]);

        Artisan::call('impersonate:migrate',[
            '--app'       => true,
            '--app_id'    => $project_tenant->getKey(),
            '--group_id'  => $group_tenant->getKey(),
            '--tenant_id' => $tenant->getKey()
        ]);

        MicroTenant::tenantImpersonate($tenant);
    }
}