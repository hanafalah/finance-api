<?php

namespace Hanafalah\WellmedFeature\Database\Seeders;

use Hanafalah\LaravelPermission\Facades\LaravelPermission;
use Hanafalah\LaravelSupport\Concerns\Support\HasRequest;
use Illuminate\Database\Seeder;

class MasterPermissionSeeder extends Seeder
{
    use HasRequest;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = LaravelPermission::scanPermissions(__DIR__.'/data/permissions');
        app(config('app.contracts.WellmedPermission'))->prepareStoreWellmedPermission($permissions);
    }
}
