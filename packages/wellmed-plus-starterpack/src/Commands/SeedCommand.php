<?php

namespace Hanafalah\WellmedPlusStarterpack\Commands;

use Illuminate\Support\Facades\Artisan;

class SeedCommand extends EnvironmentCommand{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wellmed-plus-starterpack:seed {class? : Class name of the seeder}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ini digunakan untuk seeding';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $class = $this->argument('class') ?? "DatabaseSeeder";
        Artisan::call('db:seed',[
            '--class' => "Hanafalah\WellmedPlusStarterpack\\Database\Seeders\\$class"
        ]);   
    }
}