<?php

namespace Hanafalah\WellmedLiteStarterpack\Commands;

use Hanafalah\MicroTenant\Facades\MicroTenant;
use Hanafalah\WellmedLiteStarterpack\Concerns\HasComposer;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class InstallMakeCommand extends EnvironmentCommand
{
    use HasComposer;
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wellmed-lite-starterpack:install
                            {--drop : Drop database before installing}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for initial installation of this module';

    private $modules = [
        
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dev_mode = config('micro-tenant.dev_mode');
        if (config('app.env') !== 'production') config(['micro-tenant.dev_mode' => true]);
        $this->call('optimize:clear');
        
        if ($this->option('drop')) {
            $this->comment('Drop database...');
            try {
                $default = config('database.default','pgsql');
                DB::statement("DROP DATABASE IF EXISTS " . config('database.connections.'.$default.'.database'));
            } catch (\Exception $e) {
                $this->warn('Error when drop database: ' . $e->getMessage());
            }
        }
        
        // $this->call('micro:install',[
        //     "--skip-generate" => true
        // ]);

        $provider = 'Hanafalah\WellmedLiteStarterpack\WellmedLiteStarterpackServiceProvider';
        $this->comment('Installing Module...');
        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'config'
        ]);
        $this->info('✔️  Created config/wellmed-lite-starterpack.php');

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');

        $direct_access = config('micro-tenant.direct_provider_access');
        config(['micro-tenant.direct_provider_access' => false]);
        $this->call('migrate');
        $this->call('db:seed');
        config(['micro-tenant.direct_provider_access' => $direct_access]);

        $this->info('Wellmed Lite Starterpack Seeding');
        $this->call('wellmed-lite-starterpack:seed');
        $this->info('✔️  Wellmed Lite Starterpack Seeded');

        $this->call('impersonate:cache');
        $this->info('Wellmed Lite Migrating');
        $this->call('wellmed-lite:migrate');
        $this->info('✔️  Wellmed Lite Migrated');
        
        // $this->call('wellmed-lite:impersonate-migrate');

        $this->comment('hanafalah\\wellmed-lite-starterpack installed successfully.');
        config(['micro-tenant.dev_mode' => $dev_mode]);
    }
}
