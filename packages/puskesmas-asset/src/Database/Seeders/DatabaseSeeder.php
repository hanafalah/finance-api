<?php

namespace Hanafalah\PuskesmasAsset\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //ADD YOUR SEEDER HERE
            ServiceClusterSeeder::class
        ]);
    }
}
