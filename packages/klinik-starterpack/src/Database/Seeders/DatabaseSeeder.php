<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModuleExamination\Seeders\{
    ExaminationStuffSeeder,
    MasterVaccineSeeder,
    FormSeeder
};
use Hanafalah\ModulePayment\Database\Seeders\DatabaseSeeder as ModulePaymentSeeder;
use Hanafalah\ModulePeople\Database\Seeders\DatabaseSeeder as PeopleCollectionSeeder;
use Hanafalah\ModuleAnatomy\Database\Seeders\DatabaseSeeder as AnatomyCollectionSeeder;
use Hanafalah\ModuleItem\Database\Seeders\DatabaseSeeder as ItemCollectionSeeder;
use Hanafalah\ModuleInformedConsent\Seeders\MasterInformedConsentSeeder;
use Hanafalah\PuskesmasAsset\Database\Seeders\DatabaseSeeder as PuskesmasAssetSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            $this->call([
                WorkspaceSeeder::class,
                ApiAccessSeeder::class,
                PermissionSeeder::class,
                RoleSeeder::class,
                EncodingSeeder::class,
                MasterSeeder::class,
                PuskesmasAssetSeeder::class,
                SoapSeeder::class
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
