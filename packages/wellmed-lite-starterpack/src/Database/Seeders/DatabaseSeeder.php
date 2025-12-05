<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Hanafalah\WellmedFeature\Database\Seeders\DatabaseSeeder as MasterFeatureSeeder;

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
                MasterFeatureSeeder::class,
                PermissionSeeder::class,
                RoleSeeder::class,
                EncodingSeeder::class,
                MasterSeeder::class,
                AssetSeeder::class,
                // SatuSehatIntegrationSeeder::class
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
