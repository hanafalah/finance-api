<?php

namespace Hanafalah\KlinikStarterpack\Commands;

use Hanafalah\KlinikStarterpack\Concerns\HasComposer;
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
    protected $signature = 'klinik-starterpack:install
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
        
        // if ($this->option('drop')) {
        //     $this->comment('Drop database...');
        //     try {
        //         $default = config('database.default','pgsql');
        //         DB::statement("DROP DATABASE IF EXISTS " . config('database.connections.'.$default.'.database'));
        //     } catch (\Exception $e) {
        //         $this->warn('Error when drop database: ' . $e->getMessage());
        //     }
        // }
        
        // $this->call('micro:install',[
        //     "--skip-generate" => true
        // ]);

        $provider = 'Hanafalah\KlinikStarterpack\KlinikStarterpackServiceProvider';
        $this->comment('Installing Module...');
        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'config'
        ]);
        $this->info('✔️  Created config/klinik-starterpack.php');

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');

        // $this->call('klinik-starterpack:install-submodule');
        // $this->info('✔️  Submodule installed');

        $direct_access = config('micro-tenant.direct_provider_access');
        config(['micro-tenant.direct_provider_access' => false]);
        $this->call('migrate');
        $this->call('db:seed');
        config(['micro-tenant.direct_provider_access' => $direct_access]);

        $this->info('Klinik Starterpack Seeding');
        $this->call('klinik-starterpack:seed');
        $this->info('✔️  Klinik Starterpack Seeded');

        // $this->call('impersonate:cache');
        // $this->info('Klinik Migrating');
        // $this->call('klinik:migrate');
        // $this->info('✔️  Klinik Migrated');
        
        // $this->call('klinik:impersonate-migrate');

        $this->comment('hanafalah\\klinik-starterpack installed successfully.');
        config(['micro-tenant.dev_mode' => $dev_mode]);
    }
}
