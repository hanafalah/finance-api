<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

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
use Hanafalah\KlinikStarterpack\Concerns\HasComposer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class WorkspaceSeeder extends Seeder{
    use HasRequestData, HasComposer;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $workspace = app(config('database.models.Workspace'))->uuid('9e7ff0f6-7679-46c8-ac3e-71da818160dd')->first();        
        $generator_config = config('laravel-package-generator');
        $project_namespace = 'Projects';
        $group_namespace   = 'Klinik';
        if (!isset($workspace)){
            $tenant_namespace  = 'GroupInitialKlinik';

            $default = config('tenancy.database.central_connection');
            config(['tenancy.database.central_connection' => 'central_app']);
            $tenant_schema  = app(config('app.contracts.Tenant'));
            $tenant_model   = app(config('database.models.Tenant'));
            $project_tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => null,
                'name'           => 'Klinik',
                'flag'           => $tenant_model::FLAG_APP_TENANT,
                'reference_id'   => null,
                'reference_type' => null,
                'provider'       => $project_namespace.'\\Klinik\\Providers\\KlinikServiceProvider',
                'path'           => $generator_config['patterns']['project']['published_at'],
                'packages'       => [],
                'config'         => $generator_config['patterns']['project']
            ]));

            config(['tenancy.database.central_connection' => 'central_tenant']);
            $group_tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => $project_tenant->getKey(),
                'name'           => 'Group Initial Klinik',
                'flag'           => $tenant_model::FLAG_CENTRAL_TENANT,
                'reference_id'   => null,
                'reference_type' => null,
                'provider'       => $group_namespace.'\\GroupInitialKlinik\\Providers\\GroupInitialKlinikServiceProvider',
                'app'            => ['provider' => $project_tenant->provider],
                'path'           => $generator_config['patterns']['group']['published_at'],
                'packages'       => [],
                'config'         => $generator_config['patterns']['group']
            ]));
            $group_tenant->save();

            config(['tenancy.database.central_connection' => $default]);
            $workspace = app(config('app.contracts.Workspace'))->prepareStoreWorkspace(WorkspaceData::from([
                'uuid'    => '9e7ff0f6-7679-46c8-ac3e-71da818160dd',
                'name'    => 'Klinik',
                'status'  => Status::ACTIVE->value,
                'props'   => WorkspacePropsData::from([
                    'setting' => WorkspaceSettingData::from([
                        'registration' => [
                            'is_examination' => true,
                            'direct_pos'     => true
                        ],
                        'address' => AddressData::from([
                            'name'           => 'sangkuriang',
                            'province_id'    => null,
                            'district_id'    => null,
                            'subdistrict_id' => null,
                            'village_id'     => null
                        ]),
                        'email'   => 'hamzahnuralfalah@gmail.com',
                        'phone'   => '0819-0652-1808',
                        'owner_id' => null,
                        'owner' => [
                            'id' => null,
                            'name' => null
                        ]
                    ]),
                    'integration' => [
                        "satu_sehat" => [
                            "progress" => 0,
                            "last_updated_at" => null,
                            "from" => 0,
                            "to" => 0,
                            "syncs" => [
                               "encounter" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ],
                                "condition" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ], 
                                "dispense" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ]
                            ]
                        ],
                        "bpjs" => [
                            "progress" => 0,
                            "last_updated_at" => null,
                            "from" => 0,
                            "to" => 0,
                            "syncs" => [
                               "encounter" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ],
                                "condition" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ], 
                                "dispense" => [
                                    "progress" => 0,
                                    "last_updated_at" => null,
                                    "from" => 0,
                                    "to" => 0
                                ]
                            ]
                        ]
                    ]
                ])
            ]));
            

            $tenant = $tenant_schema->prepareStoreTenant($this->requestDTO(TenantData::class,[
                'parent_id'      => $group_tenant->getKey(),
                'name'           => 'Tenant Klinik',
                'flag'           => $tenant_model::FLAG_TENANT,
                'reference_id'   => $workspace->getKey(),
                'reference_type' => $workspace->getMorphClass(),
                'domain'         => [
                    'name' => 'localhost:8004'
                ],
                'provider' => $tenant_namespace.'\\TenantKlinik\\Providers\\TenantKlinikServiceProvider',
                'path'     => $generator_config['patterns']['tenant']['published_at'],
                'app'      => ['provider' => $project_tenant->provider],
                'group'    => ['provider' => $group_tenant->provider],
                'packages' => [],
                'config'   => $generator_config['patterns']['tenant']
            ]));
        }else{
            $tenant         = $workspace->tenant;
            $group_tenant   = $tenant->parent;
            $project_tenant = $group_tenant->parent;
        }

        $tenant_path = $generator_config['patterns']['tenant']['published_at'];

        $providers = config('klinik-starterpack.packages');
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

        $composer = $tenant_path.'/'.Str::kebab($tenant->name).'/composer.json';
        if (!file_exists($composer)){
            Artisan::call('micro:add-package',[
                'namespace' => $group_namespace.'\\'.Str::studly($tenant->name),
                '--package-author' => 'Hamzah Nur Alfalah',
                '--package-email' => 'hamzahnafalah@gmail.com',
                '--pattern' => 'tenant',
                '--main-id' => $tenant->getKey()
            ]);
        }

        if (config('app.env') == 'local'){
            file_put_contents(__DIR__.'/../../tenant-repositories.json', json_encode($repositories, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $this->updateComposer($composer, __DIR__.'/../../tenant-repositories.json','repositories');
        }

        $composer = $group_tenant->path.'/'.Str::kebab($group_tenant->name).'/composer.json';
        if (!file_exists($composer)){
            Artisan::call('micro:add-package',[
                'namespace' => $group_namespace.'\\'.Str::studly($group_tenant->name),
                '--package-author' => 'Hamzah Nur Alfalah',
                '--package-email' => 'hamzahnafalah@gmail.com',
                '--pattern' => 'group',
                '--main-id' => $group_tenant->getKey()
            ]);
        }

        $composer = $project_tenant->path.'/'.Str::kebab($project_tenant->name).'/composer.json';
        if (!file_exists($composer)){
            Artisan::call('micro:add-package',[
                'namespace' => $project_namespace.'\\'.$group_namespace,
                '--package-author' => 'Hamzah Nur Alfalah',
                '--package-email' => 'hamzahnafalah@gmail.com',
                '--pattern' => 'project',
                '--main-id' => $project_tenant->getKey()
            ]);
        }
        
        if (config('app.env') == 'local'){
            file_put_contents(__DIR__.'/../../project-requirements.json', json_encode($requires, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $this->updateComposer($composer, __DIR__.'/../../project-requirements.json','require');
        }

        shell_exec("cd $tenant_path/".Str::kebab($tenant->name)." && rm -rf composer.lock && composer install");

        MicroTenant::tenantImpersonate($tenant);
        tenancy()->initialize($tenant->getKey());
        
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
    }
}